    <div class='add-user-section'>
        <h2>Workshop Event Creation</h2>

        <form action="add_workshop_to_database" method="post">
            <label for="workshop_name">Workshop name:</label>
            <input type="text" name="workshop_name">

            <label for="workshop_description">Workshop description:</label>
            <input type="text" name="workshop_description">

            <label for="venue">Venue:</label>
            <input type="text" name="venue">

            <label for="workshop_date">Workshop date:</label>
            <input type="date" name="workshop_date">

            <label for="start_time">Start time:</label>
            <input type="time" name="start_time">

            <label for="end_time">End time:</label>
            <input type="time" name="end_time">

            <input type="hidden" name="form_submitted" value="1" />
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>