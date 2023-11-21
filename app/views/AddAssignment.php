<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /* General styles */
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: 100vh;
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
    margin-bottom: 20px;
}

.insert-form label {
    display: block;
    margin-bottom: 5px;
}

.insert-form input {
    width: 100%;
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
    width: 100%;
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
<body>
    <div class="container">
        <a href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 20 19">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg>
            Home
        </a>
       
        <div class="insert-form">
            <form>
                <label for="employee">Employee:</label>
                <input type="text" id="employee" name="employee">
                <br>
                <label for="description">Description:</label>
                <input type="text" id="description" name="description">
                <br>
                <label for="location">Location:</label>
                <input type="text" id="location" name="location">
                <br>
                <label for="contactNumber">Contact Number:</label>
                <input type="text" id="contactNumber" name="contactNumber">
                <br>
                <label for="customerName">Customer Name:</label>
                <input type="text" id="customerName" name="customerName">
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
            
        <br>
        <br>

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

