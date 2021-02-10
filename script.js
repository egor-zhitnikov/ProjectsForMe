function calculate(form) {
    var x = form.x;
    var y = form.y;
    if(x!='' && y!=''){
        switch (form.operation){
            case '+':
                alert("Result:",x+y);
                break;
            case '-':
                alert("Result:",x-y);
                break;
            case '*':
                alert("Result:",x*y);
                break;
            case '/':
                alert("Result:",x+y);
                break;
            default:
                alert("Incorrect input");
                break;
        }
    }
    else{
        alert("Incorrect input");
    }
}