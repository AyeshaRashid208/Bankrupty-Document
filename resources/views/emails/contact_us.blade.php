<!DOCTYPE html>
<html>
<head>
    <title>Bankruptcy</title>
</head>
<body>
    <b>Hi Admin,</b> Contact mail from user<br>
    <table>
        <tbody>
            <tr>
                <td>Name:</td>
                <td>{{ $details['Name'] }}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{ $details['Email'] }}</td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td>{{ $details['Phone'] }}</td>
            </tr>
            <tr>
                <td>Type:</td>
                <td>{{ $details['Type'] }}</td>
            </tr>
            <tr>
                <td>Message:</td>
                <td>{{ $details['Message'] }}</td>
            </tr>
        </tbody>
    </table>
   
    <p>Thank you</p>
</body>
</html>