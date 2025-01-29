<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .Icon{
    color: #000;
    margin: 30px;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.Icon h1{
    font-size: 50px;
    padding: 20px 0px 30px 10px;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: #f9f9f9;
    color: #000;
}
th, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}
th {
    background-color: #f2f2f2;
}
.details-btn {
    background-color: rgb(20, 238, 0);
    color: black;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 4px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    margin-left: 10px;

}
.details-btn:hover {
    background-color: #17f534;
}

</style>
<body>

<div class="Icon" id="stuedntTable">
         <h1>All Student List</h1>
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Full Info</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>std8938</td>
                <td>Natan Hailu</td>
                <td>Male</td>
                <td>1-9-2001</td>
                <td>AA</td>
                <td><button class="details-btn">Details</button></td>
            </tr>
            <!-- Empty rows -->
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
        </tbody>
    </table>
       </div>

</body>
</html>