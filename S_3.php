<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }
        .container {
            margin: auto;
            padding: 20px;
            border: 1px solid white;
            width: 50%;
            border-radius: 10px;
        }
        h1, h2 {
            text-align: center;
        }
        .button {
            margin: 5px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
        }
        .save {
            background-color: green;
            color: white;
        }
        .discard {
            background-color: red;
            color: white;
        }
        .profile-photo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }
        .profile-photo img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .input-field {
            width: 100%;
            margin: 10px 0;
            padding: 8px;
        }
        .skills {
            display: flex;
            flex-wrap: wrap;
            margin: 10px 0;
        }
        .skills input {
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Screen 3</h1>
        <h2>User Profile</h2>
        <div>
            <button class="button save">Save</button>
            <button class="button discard">Discard</button>
            <button class="button">Swap request</button>
            <button class="button">Home</button>
        </div>
        
        <label for="name">Name</label>
        <input type="text" id="name" class="input-field">

        <label for="location">Location</label>
        <input type="text" id="location" class="input-field">

        <label>Skills Offered</label>
        <div class="skills">
            <input type="checkbox" id="skill1" value="Web Development">
            <label for="skill1">Web Development</label>
            <input type="checkbox" id="skill2" value="Graphic Design">
            <label for="skill2">Graphic Design</label>
        </div>

        <label>Skills Wanted</label>
        <div class="skills">
            <input type="checkbox" id="wanted1" value="Python">
            <label for="wanted1">Python</label>
            <input type="checkbox" id="wanted2" value="Data Analysis">
            <label for="wanted2">Data Analysis</label>
        </div>

        <label for="availability">Availability</label>
        <input type="text" id="availability" class="input-field" value="weekends">

        <label for="profile">Profile</label>
        <input type="text" id="profile" class="input-field" value="Public">

        <div class="profile-photo">
            <img src="profile-photo-placeholder.png" alt="Profile Photo">
        </div>
        <button class="button">Add/Edit Photo</button>
        <button class="button">Remove Photo</button>
    </div>
</body>
</html>
