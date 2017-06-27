<div id="contactDiv">
<h1>
    Contact
</h1>
    <a name="contact"></a>
    <form action="phpfiles/functions/submitContact.php" class="center" method="post">
        <table id="tableContact">
            <tr>
                <td>
                    <label for="name">Uw naam:</label>
                </td>
                <td>
                    <input id="name" type="text" class="contactInput">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Uw email adress:</label>
                </td>
                <td>
                    <input name="email" type="email" class="contactInput">
                </td>
            </tr>
            <tr>
                <td>
                    Bericht:
                </td>
                <td>
                    <textarea id="inputTextBericht"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="contactInput">
                </td>
            </tr>
        </table>
    </form>
</div>