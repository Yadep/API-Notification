Notification :

Endpoints :
L'application � deux endpoints:
    POST /sendSMS($id)
    POST /sendEmail($id)

Envoi un SMS 
Exemple de requ�te POST/sendSMS : 
{
        "num": "0601020304",
        "corps": "ceci est une alerte ..."
}

Success : on recoit un sms

Envoi de mail

Exemple de requ�te POST/sendSMS : 
{
    "mail" = "m...@gmail.com";
    "subject" = "confimation de commande";
    "corps" = "Nous vous confirmons que ...";
}