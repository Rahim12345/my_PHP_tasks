<?php
/**
 * @author Rahim Süleymanov
 * 
 * TASK 3. Funksiya daxil olmuş emailin düzgün formatda olub, olmadığını deməlidi.
 * 
 * Useful link below
 * https://stackoverflow.com/questions/12026842/how-to-validate-an-email-address-in-php
 */

##################################<= Üsul - 1 =>######################################
function email_yoxla_1($email)
{
    $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

    $emailaddress = 'test@gmail.com';

    if (preg_match($pattern, $email) === 1) 
    {
        $result = 'true';
    }
    else
    {
        $result = 'false';
    }
    return $result;
}

echo email_yoxla_1('asd@ad').'<br/>';
echo email_yoxla_1('a@b.c').'<br/>';
echo email_yoxla_1('@b.c').'<br/>';

echo '<hr/>';

##################################<= Üsul - 2 =>######################################
function email_yoxla_2($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $result = 'true';
    }
    else
    {
        $result = 'false';
    }
    return $result;
}

echo email_yoxla_2('asd@ad').'<br/>';
echo email_yoxla_2('a@b.c').'<br/>';
echo email_yoxla_2('@b.c').'<br/>';