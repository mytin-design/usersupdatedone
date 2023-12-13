<!-- settings.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Settings</title>
    <!-- Include necessary stylesheets or libraries -->
</head>
<body>
    <h1>User Settings</h1>
    <form action="save_preferences.php" method="post">
        <label for="color">Select a Theme Color:</label>
        <input type="color" id="color" name="color" value="#ff0000"> <!-- Example color picker input -->
        
        <label for="layout">Select Layout:</label>
        <select id="layout" name="layout">
            <option value="grid">Grid</option>
            <option value="list">List</option>
        </select> <!-- Example dropdown for layout selection -->

        <!-- Add more form fields for other preferences... -->

        <input type="submit" value="Save Preferences">
    </form>
</body>
</html>
