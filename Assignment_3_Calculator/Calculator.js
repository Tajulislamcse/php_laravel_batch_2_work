function calculation(x)
{
    var first_number=parseInt(document.getElementById('num1').value);
    var second_number=parseInt(document.getElementById('num2').value);
     //var operator=document.getElementsByClassName('tajul').value;
     //if(operator==="+")
//{
    if(x == '-')
        var result=first_number-second_number;
    else if(x == '+')
        var result=first_number+second_number;
    else if(x == '*')
        var result=first_number*second_number;
    else if(x == '/')
        var result=first_number/second_number;
    document.getElementById('result').value=result;
    
    
//}

}