<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General styles */
        *{
            font-family:Ariel;
        }
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100vh;
            text-align:center;
        }

        /* Left panel styles for insertion form */
        .left-panel {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Right panel styles for task table */
        .right-panel {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }
        h1,label{
            font-family:Ariel;
            text-align:center;
        }

        /* Header styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }

        .header a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
        }

        .header svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }

        /* Insert form styles */
        .insert-form {
            display: flex;
            flex-direction: column;
            padding: 20px;
            border: 1px solid #ccc;
            margin-bottom: 16px;
        }

        .insert-form label {
            display: block;
            margin-bottom: 5px;
        }

        .insert-form input {
            width: 97%;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .insert-form button {
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        /* Task table styles */
        .task-table {
            width: 95%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }

        .task-table th,
        .task-table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .task-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .task-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    
    <div class="container">
    
        <div class="left-panel">
            
            <br>

            <div class="insert-form">
                <h1>Add New Task</h1>
                <br>
                <form>
                    <label for="employee">Employee</label>
                    <input type="text" id="employee" name="employee">
                    <br>
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description">
                    <br>
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location">
                    <br>
                    <label for="contactNumber">Contact Number</label>
                    <input type="text" id="contactNumber" name="contactNumber">
                    <br>
                    <label for="customerName">Customer Name</label>
                    <input type="text" id="customerName" name="customerName">
                    <br>
                    <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

        <table class="task-table">
            <tr>
                <th>Employee</th>
                <th>Description</th>
                <th>Location</th>
                <th>Contact Number</th>
                <th>Customer Name</th>
                <th>Action</th>
            </tr>

        </table>
    </div>
</body>

</html>
