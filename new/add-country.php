<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add country</title>

    <style>
        body {
            font-family: sans-serif;
            /*background: -webkit-linear-gradient(to right, #155799, #159957);
            background: linear-gradient(to right, #155799, #159957);
            color: whitesmoke;*/
        }
        span{
            font-size: 18px;
        }

        h1 {
            text-align: center;
            margin: 4px;
            font-size: 38px;
            color: darkgray;
        }
        .form{
            width: 100%;
            float: left;
            background: -webkit-linear-gradient(to right, #155799, #159957);
            background: linear-gradient(to right, #155799, #159957);
            height: 98vh;
        }

        form {
            width: 30rem;
            margin: auto;
            color: whitesmoke;
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(11, 15, 13, 0.582);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
            padding: 20px 25px;
            margin-top: 10%;
        }

        input[type=text]{
            width: 100%;
            margin: 10px 0;
            border-radius: 5px;
            padding: 15px 18px;
            box-sizing: border-box;
        }
        input::placeholder{
            font-size: 20px;
        }
        label {
            font-size: 24px;
            color: lightsteelblue;
        }

        #button {
/*            background-color: #030804;*/
            background: lightgray;
            color: black;
            font-weight: bold;
            padding: 14px 20px;
            border-radius: 10px;
            margin: 7px 0;
            width: 48%;
            font-size: 18px;
            display: inline-block;
        }

        #button:hover {
            opacity: 0.6;
            cursor: pointer;
        }

        .headingsContainer {
            text-align: center;
        }

        .mainContainer {
            padding: 16px;
        }

        /* Media queries for the responsiveness of the page */
        @media screen and (max-width: 600px) {
            form {
                width: 25rem;
            }
        }

        @media screen and (max-width: 400px) {
            form {
                width: 20rem;
            }
        }
    </style>
</head>

<body>
    <div class="form">
            <form action="country-save.php" method="post">
            <!-- Headings for the form -->
            <div class="headingsContainer">
                <h1>Add Country</h1>
            </div>

            <!-- Main container for all inputs -->
            <div class="mainContainer">
                <!-- Username -->
                <label for="name">Country Name</label>
                <input type="text" name="name" placeholder="Country Name">

                <br><br>
                <label for="status">Status:&nbsp;&nbsp;&nbsp;</label>
                <input type="radio" name="status" value="Enable">
                <span>&nbsp;Enable&nbsp;&nbsp;</span>
                <input type="radio" name="status" value="Disable">
                <span>&nbsp;Disable</span>

                <br><br>
                <input type="submit" name="submit" value="Submit" id="button">
                <input type="reset" name="reset" value="Reset" id="button">

            </div>
        </form>
    </div>
</body>

</html>