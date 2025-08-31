function render(url,id)
{
    const div = document.getElementById(id)
    var request = new XMLHttpRequest()
    request.open("get",url)
    request.send()
    var data = request.responseText
    var ini = parseIni(data)
    generateHTML(ini,div)

}
function parseIni(data) {
    var regex = {
        section: /^\s*\[\s*([^\]]*)\s*\]\s*$/,
        param: /^\s*([\w\.\-\_]+)\s*=\s*(.*?)\s*$/,
        comment: /^\s*;.*$/
    };
    var value = {};
    var lines = data.split(/\r\n|\r|\n/);
    var section = null;

    lines.forEach(function (line) {
        if (regex.comment.test(line)) {
            return;
        } else if (regex.param.test(line)) {
            var match = line.match(regex.param);
            if (section) {
                value[section][match[1]] = match[2];
            } else {
                value[match[1]] = match[2];
            }
        } else if (regex.section.test(line)) {
            var match = line.match(regex.section);
            value[match[1]] = {};
            section = match[1];
        } else if (line.length === 0 && section) {
            section = null;
        }
    });

    return value;
}
function generateHTML(ini,root) {
    var container = document.createElement('div');
    container.id = 'ini-container';

    for (var section in ini) {
        if (ini.hasOwnProperty(section)) {
            var sectionDiv = document.createElement('div');
            sectionDiv.className = 'section';

            var sectionHeader = document.createElement('h2');
            sectionHeader.textContent = section;
            sectionDiv.appendChild(sectionHeader);

            var paramsDiv = document.createElement('div');
            paramsDiv.className = 'params';

            for (var param in ini[section]) {
                if (ini[section].hasOwnProperty(param)) {
                    var paramDiv = document.createElement('div');
                    paramDiv.className = 'param';

                    var paramName = document.createElement('span');
                    paramName.className = 'param-name';
                    paramName.textContent = param + ': ';

                    var paramValue = document.createElement('span');
                    paramValue.className = 'param-value';
                    paramValue.textContent = ini[section][param];

                    paramDiv.appendChild(paramName);
                    paramDiv.appendChild(paramValue);
                    paramsDiv.appendChild(paramDiv);
                }
            }

            sectionDiv.appendChild(paramsDiv);
            container.appendChild(sectionDiv);
        }
    }
    root.appendChild(container)
}