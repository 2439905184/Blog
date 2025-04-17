function render(url)
{
    var request = new XMLHttpRequest()
    request.open("get",url)
    request.send()
    var data = request.responseText
    
}