<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="../styles/cartocarbu-form.css" rel="stylesheet" />
</head>
<body>
<form method="get" action="../lib/process-cartocarbu.php">
    <fieldset>
        <legend>Carto'Carbu form</legend>
        <div>
            <label id="commune-label" for="commune">Commune</label>
            <input type="text" name="commune" placeholder="Please enter the place you want to fin carto'carbu?" required/>
        </div>
        <div>
            <label id="rayon-label" for="rayon">Rayon (optional) </label>
            <input type="number" name="rayon" placeholder="Please enter the rayon in kms that you want to search"/>
        </div>
        <div>
            <label id="carburants-label" for="carburants">Carburants</label>
            <br><br>
            <select name="carburants[]" multiple required>
                <option value="1">Gazole</option>
                <option value="2">SP95</option>
                <option value="3">E85</option>
                <option value="4">GPLc</option>
                <option value="5">E10</option>
                <option value="6">SP98</option>
            </select>
        </div>
        <button type="submit" value="Submit">Submit</button>
    </fieldset>
</form>
</body>
</html>
