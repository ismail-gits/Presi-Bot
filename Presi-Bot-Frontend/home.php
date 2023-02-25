<?php require_once "controllerUserData.php"; ?>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<?php require 'homeNavigation.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
</head>
<body>
    <style>
        .rw-conversation-container .rw-header{background-image: -webkit-linear-gradient(left, #a445b2, #fa4299);}
        .rw-conversation-container .rw-messages-container .rw-message .rw-client{background-image: -webkit-linear-gradient(left, #a445b2, #fa4299);}
        .rw-launcher{background-image: -webkit-linear-gradient(left, #a445b2, #fa4299);}
        img {
        width: 60%;
        }

        @media all and (max-width: 855px) {
        img {
          width: 100%;
        }
        }
        body {
          margin: 0;
          padding: 0;
          background-image: url('presicampus.jpg');
          /* background-image: url('back1.jpg'); */
          background-size: cover;
          /* background-size: 60%; */
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: top;
        }
        ::selection{
            color: #fff;
            background: #fa4299;
        }
    </style>

    <script>!(function () {
        let e = document.createElement("script"),
          t = document.head || document.getElementsByTagName("head")[0];
        (e.src = "https://cdn.jsdelivr.net/npm/rasa-webchat@1.x.x/lib/index.js"),
          (e.async = !0),
          (e.onload = () => {
            window.WebChat.default(
              {
                initPayload: '/greet',
                customData: { language: "en" },
                socketUrl: "http://localhost:5005",
                title: "PRESIBOT",
                subtitle: "Say hi and get started!",
                profileAvatar: "botLogo2.png",
                openLauncherImage: "botLogo2.png",
                closeImage: "byelogo1.png",
                showFullScreenButton: true,
                showMessageDate: true,
                inputTextFieldHint: "What's in your mind?..."
              },
              null
            );
          }),
          t.insertBefore(e, t.firstChild);
      })();
      localStorage.clear();
    </script>

    <div style="text-align:center; border-top: 10px solid rgb(250, 66, 153);">
        <img src="http://www.admission.mba/wp-content/uploads/presidency-logo.png" alt="College Logo">
    </div>
</body>
</html>