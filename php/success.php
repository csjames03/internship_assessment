<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main class="success-main"> 
        <p class="title"> Data </p>
        <div>
            <img src="" alt="" id="profile" class="profile">
        </div>
        <div>
            <p>Firstname:
                <strong> <?php echo $_GET['firstname'];?></strong>
            </p>
            <p>
                Lastname: <strong> <?php echo $_GET['lastname'];?></strong></p>
            </p>
        </div>
        <div>
            <p>
                Date of Birth: 
                <strong> <?php echo $_GET['date-month']; ?> &nbsp <?php echo $_GET['date-day'];?>, &nbsp <?php echo $_GET['date-year']; ?></strong>
            </p>
        </div>
        <div>
            <p>
                Gender: <strong> <?php echo $_GET['gender']; ?> </strong>
                <input type="text" id="gender" value="<?php echo $_GET['gender']; ?>" hidden>
            </p>
        </div>
        <a href="../index.html">
            Back to Form
        </a>
    </main>
    <script>    
        const gender = document.getElementById('gender');
        const profile = document.getElementById('profile');
        gender === 'male' ? (profile.src = "../public/man.png"):(profile.src = "../public/woman.png")
    </script>
</body>
</html>