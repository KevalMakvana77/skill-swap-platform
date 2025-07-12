<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body style="background-color: black; color: white; font-family: Arial, sans-serif; display: flex; flex-direction: column; align-items: center;">

    <div style="border: 2px solid white; border-radius: 10px; padding: 20px; width: 300px; background-color: rgba(255, 255, 255, 0.1);">
        <h2 style="text-align: center;">Screen 5</h2>
        
        <label for="offeredSkills">Choose one of your offered skills</label>
        <select id="offeredSkills" style="width: 100%; padding: 5px; margin: 10px 0; border-radius: 5px;">
            <option value="">Select...</option>
            <option value="skill1">Skill 1</option>
            <option value="skill2">Skill 2</option>
        </select>

        <label for="wantedSkills">Choose one of their wanted skills</label>
        <select id="wantedSkills" style="width: 100%; padding: 5px; margin: 10px 0; border-radius: 5px;">
            <option value="">Select...</option>
            <option value="skill3">Skill 3</option>
            <option value="skill4">Skill 4</option>
        </select>

        <label for="message">Message</label>
        <textarea id="message" rows="4" style="width: 100%; padding: 5px; border-radius: 5px; margin: 10px 0;"></textarea>

        <button type="submit" style="width: 100%; padding: 10px; border-radius: 5px; background-color: blue; color: white; cursor: pointer;">Submit</button>
    </div>

</body>
</html>
