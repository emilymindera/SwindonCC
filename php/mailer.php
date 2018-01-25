<form id="eventForm" action="php/formsend.php" method="POST";>
    <label>Name:
    <br>
    </label>
    <input type="text" name="fullname" required>
    <br>
    <label>Phone Number:
        <br>
    </label>
    <input type="number" name="phonenumber" required>
        <br>
    <label>Email Address:
        <br>
    </label>
    <input type="email" name="emailaddress" required>
        <br>
    <label>Event details/Any questions: </label>
        <br>
    <textarea name="event"></textarea>
    <input type="submit" id'"submit">
</form>