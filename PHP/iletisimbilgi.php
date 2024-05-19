<table class="table">
        <thead class="table">
            <tr>
                <th colspan="5" id="basliklar">
                    <h3>BİLGİLER</h3>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="basliklar">İsim</td>
                <td id="basliklar">

                    <?php
                    echo $_POST['isim'];
                    ?>

                </td>
            </tr>

            <tr>
                <td id="basliklar">E-Mail</td>
                <td id="basliklar">
                    <?php
                    echo $_POST['mail'];
                    ?>
                </td>
            </tr>

            <tr>
                <td id="basliklar">Konu</td>
                <td id="basliklar">
                    <?php
                    if (isset($_POST['gonder'])) {

                        $secim = $_POST['radio'];
                        echo $secim;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td id="basliklar">Mesajınız</td>
                <td id="basliklar">
                    <?php
                    echo $_POST['mesaj'];
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="./bootstrap.css/js/bootstrap.js"></script>
</body>
</html>
