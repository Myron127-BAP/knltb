    <?php



    include_once 'Database.inc.php';
    include_once 'ToernooiUitslagRonde1.php';
    include_once 'ToernooiUitslagRonde2.php';
    include_once 'ToernooiUitslagRonde3.php';
    include_once 'ToernooiUitslagFinale.php';


    /**Het random uitzoeken van een ID**/
    $id1  = rand(1, 4);
    $id2  = rand(5, 9);
    $id3  = rand(10, 14);
    $id4  = rand(15, 19);
    $id5  = rand(20, 24);
    $id6  = rand(25, 29);
    $id7  = rand(30, 34);
    $id8  = rand(35, 39);
    $id9  = rand(40, 44);
    $id10 = rand(45, 49);
    $id11 = rand(50, 54);
    $id12 = rand(55, 59);
    $id13 = rand(60, 64);
    $id14 = rand(65, 69);
    $id15 = rand(70, 74);
    $id16 = rand(75, 79);



    /**Random Speler 1**/
    $randuser1 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id1'";$Result1 = mysqli_query($conn, $randuser1);
    while($row1 = mysqli_fetch_assoc($Result1))
    {
        if ($uitslag1 > $uitslag2)
        {
            echo $_SESSION['speler1'] = $row1['voornaam'] . " " . $row1['achternaam'];
            echo $_SESSION['ronde2speler1-2'] = $row1['voornaam'] . " " . $row1['achternaam'];
        }
        if ($uitslag1 > $uitslag2 && $uitslag1ronde2 > $uitslag2ronde2)
        {
            echo $_SESSION['speler1'] = $row1['voornaam'] . " " . $row1['achternaam'];
            echo $_SESSION['ronde2speler1-2'] = $row1['voornaam'] . " " . $row1['achternaam'];
            echo $_SESSION['ronde3speler1-2'] = $row1['voornaam'] . " " . $row1['achternaam'];
        }
        if ($uitslag1 > $uitslag2 && $uitslag1ronde2 > $uitslag2ronde2 && $uitslag1ronde3 > $uitslag2ronde3 )
        {
            echo $_SESSION['speler1'] = $row1['voornaam'] . " " . $row1['achternaam'];
            echo $_SESSION['ronde2speler1-2'] = $row1['voornaam'] . " " . $row1['achternaam'];
            echo $_SESSION['ronde3speler1-2'] = $row1['voornaam'] . " " . $row1['achternaam'];
            echo $_SESSION['ronde4speler1-2'] = $row1['voornaam'] . " " . $row1['achternaam'];
        }
        else{echo $_SESSION['speler1'] = $row1['voornaam'] . " " . $row1['achternaam'];}}

    /**Random Speler 2**/
    $randuser2 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id2'"; $Result2 = mysqli_query($conn, $randuser2);
    while($row2 = mysqli_fetch_assoc($Result2))
    {
        if ($uitslag2 > $uitslag1)
        {
            echo $_SESSION['speler2'] = $row2['voornaam'] . " " . $row2['achternaam'];
            echo $_SESSION['ronde2speler1-2'] = $row2['voornaam'] . " " . $row2['achternaam'];
        }
        if ($uitslag2 > $uitslag1 && $uitslag1ronde2 > $uitslag2ronde2)
        {
            echo $_SESSION['speler2'] = $row2['voornaam'] . " " . $row2['achternaam'];
            echo $_SESSION['ronde2speler1-2'] = $row2['voornaam'] . " " . $row2['achternaam'];
            echo $_SESSION['ronde3speler1-2'] = $row2['voornaam'] . " " . $row2['achternaam'];
        }
        if ($uitslag2 > $uitslag1 && $uitslag1ronde2 > $uitslag2ronde2 && $uitslag1ronde3 > $uitslag2ronde3 )
        {
            echo $_SESSION['speler2'] = $row2['voornaam'] . " " . $row2['achternaam'];
            echo $_SESSION['ronde2speler1-2'] = $row2['voornaam'] . " " . $row2['achternaam'];
            echo $_SESSION['ronde3speler1-2'] = $row2['voornaam'] . " " . $row2['achternaam'];
            echo $_SESSION['ronde4speler1-2'] = $row2['voornaam'] . " " . $row2['achternaam'];
        }
        else{echo $_SESSION['speler2'] = $row2['voornaam'] . " " . $row2['achternaam'];}}

    /**Random Speler 3**/
    $randuser3 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id3'"; $Result3 = mysqli_query($conn, $randuser3);
    while($row3 = mysqli_fetch_assoc($Result3))
    {
        if ($uitslag3 > $uitslag4)
        {
            echo $_SESSION['speler3'] = $row3['voornaam'] . " " . $row3['achternaam'];
            echo $_SESSION['ronde2speler3-4'] = $row3['voornaam'] . " " . $row3['achternaam'];
        }
        if ($uitslag3 > $uitslag4 && $uitslag2ronde2 > $uitslag1ronde2)
        {
            echo $_SESSION['speler3'] = $row3['voornaam'] . " " . $row3['achternaam'];
            echo $_SESSION['ronde2speler3-4'] = $row3['voornaam'] . " " . $row3['achternaam'];
            echo $_SESSION['ronde3speler1-2'] = $row3['voornaam'] . " " . $row3['achternaam'];
        }
        if ($uitslag3 > $uitslag4 && $uitslag2ronde2 > $uitslag1ronde2 && $uitslag1ronde3 > $uitslag2ronde3 )
        {
            echo $_SESSION['speler3'] = $row3['voornaam'] . " " . $row3['achternaam'];
            echo $_SESSION['ronde2speler3-4'] = $row3['voornaam'] . " " . $row3['achternaam'];
            echo $_SESSION['ronde3speler1-2'] = $row3['voornaam'] . " " . $row3['achternaam'];
            echo $_SESSION['ronde4speler1-2'] = $row3['voornaam'] . " " . $row3['achternaam'];
        }
        else{echo $_SESSION['speler3'] = $row3['voornaam'] . " " . $row3['achternaam'];}}

    /**Random Speler 4**/
    $randuser4 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id4'"; $Result4 = mysqli_query($conn, $randuser4);
    while($row4 = mysqli_fetch_assoc($Result4))
    {
        if ($uitslag4 > $uitslag3)
        {
            echo $_SESSION['speler4'] = $row4['voornaam'] . " " . $row4['achternaam'];
            echo $_SESSION['ronde2speler3-4'] = $row4['voornaam'] . " " . $row4['achternaam'];
        }
        if ($uitslag4 > $uitslag3 && $uitslag2ronde2 > $uitslag1ronde2)
        {
            echo $_SESSION['speler4'] = $row4['voornaam'] . " " . $row4['achternaam'];
            echo $_SESSION['ronde2speler3-4'] = $row4['voornaam'] . " " . $row4['achternaam'];
            echo $_SESSION['ronde3speler1-2'] = $row4['voornaam'] . " " . $row4['achternaam'];
        }
        if ($uitslag4 > $uitslag3 && $uitslag2ronde2 > $uitslag1ronde2 && $uitslag1ronde3 > $uitslag2ronde3 )
        {
            echo $_SESSION['speler4'] = $row4['voornaam'] . " " . $row4['achternaam'];
            echo $_SESSION['ronde2speler3-4'] = $row4['voornaam'] . " " . $row4['achternaam'];
            echo $_SESSION['ronde3speler1-2'] = $row4['voornaam'] . " " . $row4['achternaam'];
            echo $_SESSION['ronde4speler1-2'] = $row4['voornaam'] . " " . $row4['achternaam'];
        }
        else{echo $_SESSION['speler4'] = $row4['voornaam'] . " " . $row4['achternaam'];}}

    /**Random Speler 5**/
    $randuser5 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id5'"; $Result5 = mysqli_query($conn, $randuser5);
    while($row5 = mysqli_fetch_assoc($Result5))
    {
        if ($uitslag5 > $uitslag6){
            echo $_SESSION['speler5'] = $row5['voornaam'] . " " . $row5['achternaam'];
            echo $_SESSION['ronde2speler5-6'] = $row5['voornaam'] . " " . $row5['achternaam'];
        }
        if ($uitslag5 > $uitslag6 && $uitslag3ronde2 > $uitslag4ronde2)
        {
            echo $_SESSION['speler5'] = $row5['voornaam'] . " " . $row5['achternaam'];
            echo $_SESSION['ronde2speler5-6'] = $row5['voornaam'] . " " . $row5['achternaam'];
            echo $_SESSION['ronde3speler3-4'] = $row5['voornaam'] . " " . $row5['achternaam'];
        }
        if ($uitslag5 > $uitslag6 && $uitslag3ronde2 > $uitslag4ronde2 && $uitslag2ronde3 > $uitslag1ronde3 )
        {
            echo $_SESSION['speler5'] = $row5['voornaam'] . " " . $row5['achternaam'];
            echo $_SESSION['ronde2speler5-6'] = $row5['voornaam'] . " " . $row5['achternaam'];
            echo $_SESSION['ronde3speler3-4'] = $row5['voornaam'] . " " . $row5['achternaam'];
            echo $_SESSION['ronde4speler1-2'] = $row5['voornaam'] . " " . $row5['achternaam'];
        }
        else{echo $_SESSION['speler5'] = $row5['voornaam'] . " " . $row5['achternaam'];}}

    /**Random Speler 6**/
    $randuser6 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id6'"; $Result6 = mysqli_query($conn, $randuser6);
    while($row6 = mysqli_fetch_assoc($Result6))
    {
        if ($uitslag6 > $uitslag5){
            echo $_SESSION['speler6'] = $row6['voornaam'] . " " . $row6['achternaam'];
            echo $_SESSION['ronde2speler5-6'] = $row6['voornaam'] . " " . $row6['achternaam'];
        }
        if ($uitslag6 > $uitslag5 && $uitslag3ronde2 > $uitslag4ronde2)
        {
            echo $_SESSION['speler6'] = $row6['voornaam'] . " " . $row6['achternaam'];
            echo $_SESSION['ronde2speler5-6'] = $row6['voornaam'] . " " . $row6['achternaam'];
            echo $_SESSION['ronde3speler3-4'] = $row6['voornaam'] . " " . $row6['achternaam'];
        }
        if ($uitslag6 > $uitslag5 && $uitslag4ronde2 > $uitslag4ronde2 && $uitslag2ronde3 > $uitslag1ronde3 )
        {
            echo $_SESSION['speler6'] = $row6['voornaam'] . " " . $row6['achternaam'];
            echo $_SESSION['ronde2speler5-6'] = $row6['voornaam'] . " " . $row6['achternaam'];
            echo $_SESSION['ronde3speler3-4'] = $row6['voornaam'] . " " . $row6['achternaam'];
            echo $_SESSION['ronde4speler1-2'] = $row6['voornaam'] . " " . $row6['achternaam'];
        }
        else{echo $_SESSION['speler6'] = $row6['voornaam'] . " " . $row6['achternaam'];}}

    //Random Speler 7
    $randuser7 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id7'"; $Result7 = mysqli_query($conn, $randuser7);
    while($row7 = mysqli_fetch_assoc($Result7))
    {
        if ($uitslag7 > $uitslag8){
            echo $_SESSION['speler7'] = $row7['voornaam'] . " " . $row7['achternaam'];
            echo $_SESSION['ronde2speler7-8'] = $row7['voornaam'] . " " . $row7['achternaam'];
        }
        if ($uitslag7> $uitslag8 && $uitslag4ronde2 > $uitslag3ronde2)
        {
            echo $_SESSION['speler7'] = $row7['voornaam'] . " " . $row7['achternaam'];
            echo $_SESSION['ronde2speler7-8'] = $row7['voornaam'] . " " . $row7['achternaam'];
            echo $_SESSION['ronde3speler3-4'] = $row7['voornaam'] . " " . $row7['achternaam'];
        }
        if ($uitslag7 > $uitslag8 && $uitslag4ronde2 > $uitslag3ronde2 && $uitslag2ronde3 > $uitslag1ronde3 )
        {
            echo $_SESSION['speler7'] = $row7['voornaam'] . " " . $row7['achternaam'];
            echo $_SESSION['ronde2speler7-8'] = $row7['voornaam'] . " " . $row7['achternaam'];
            echo $_SESSION['ronde3speler3-4'] = $row7['voornaam'] . " " . $row7['achternaam'];
            echo $_SESSION['ronde4speler1-2'] = $row7['voornaam'] . " " . $row7['achternaam'];
        }
        else{echo $_SESSION['speler7'] = $row7['voornaam'] . " " . $row7['achternaam'];}}

    //Random Speler 8
    $randuser8 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id8'"; $Result8 = mysqli_query($conn, $randuser8);
    while($row8 = mysqli_fetch_assoc($Result8))
    {
        if ($uitslag8 > $uitslag7){
            echo $_SESSION['speler8'] = $row8['voornaam'] . " " . $row8['achternaam'];
            echo $_SESSION['ronde2speler7-8'] = $row8['voornaam'] . " " . $row8['achternaam'];
        }
        if ($uitslag8> $uitslag7 && $uitslag4ronde2 > $uitslag3ronde2)
        {
            echo $_SESSION['speler8'] = $row8['voornaam'] . " " . $row8['achternaam'];
            echo $_SESSION['ronde2speler7-8'] = $row8['voornaam'] . " " . $row8['achternaam'];
            echo $_SESSION['ronde3speler3-4'] = $row8['voornaam'] . " " . $row8['achternaam'];
        }
        if ($uitslag8 > $uitslag7 && $uitslag4ronde2 > $uitslag3ronde2 && $uitslag2ronde3 > $uitslag1ronde3 )
        {
            echo $_SESSION['speler8'] = $row8['voornaam'] . " " . $row8['achternaam'];
            echo $_SESSION['ronde2speler7-8'] = $row8['voornaam'] . " " . $row8['achternaam'];
            echo $_SESSION['ronde3speler3-4'] = $row8['voornaam'] . " " . $row8['achternaam'];
            echo $_SESSION['ronde4speler1-2'] = $row8['voornaam'] . " " . $row8['achternaam'];
        }
        else{echo $_SESSION['speler8'] = $row8['voornaam'] . " " . $row8['achternaam'];}}

    //Random Speler 9
    $randuser9 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id9'"; $Result9 = mysqli_query($conn, $randuser9);
    while($row9 = mysqli_fetch_assoc($Result9))
    {
        if ($uitslag9 > $uitslag10){
            echo $_SESSION['speler9'] = $row9['voornaam'] . " " . $row9['achternaam'];
            echo $_SESSION['ronde2speler9-10'] = $row9['voornaam'] . " " . $row9['achternaam'];
        }
        if ($uitslag9> $uitslag10 && $uitslag5ronde2 > $uitslag6ronde2)
        {
            echo $_SESSION['speler9'] = $row9['voornaam'] . " " . $row9['achternaam'];
            echo $_SESSION['ronde2speler9-10'] = $row9['voornaam'] . " " . $row9['achternaam'];
            echo $_SESSION['ronde3speler5-6'] = $row9['voornaam'] . " " . $row9['achternaam'];
        }
        if ($uitslag9 > $uitslag10 && $uitslag5ronde2 > $uitslag6ronde2 && $uitslag3ronde3 > $uitslag4ronde3 )
        {
            echo $_SESSION['speler9'] = $row9['voornaam'] . " " . $row9['achternaam'];
            echo $_SESSION['ronde2speler9-10'] = $row9['voornaam'] . " " . $row9['achternaam'];
            echo $_SESSION['ronde3speler5-6'] = $row9['voornaam'] . " " . $row9['achternaam'];
            echo $_SESSION['ronde4speler3-4'] = $row9['voornaam'] . " " . $row9['achternaam'];
        }
        else{echo $_SESSION['speler9'] = $row9['voornaam'] . " " . $row9['achternaam'];}}

    //Random Speler 10
    $randuser10 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id10'"; $Result10 = mysqli_query($conn, $randuser10);
    while($row10 = mysqli_fetch_assoc($Result10))
    {
        if ($uitslag10 > $uitslag9){
            echo $_SESSION['speler10'] = $row10['voornaam'] . " " . $row10['achternaam'];
            echo $_SESSION['ronde2speler9-10'] = $row10['voornaam'] . " " . $row10['achternaam'];
        }
        if ($uitslag10> $uitslag9 && $uitslag5ronde2 > $uitslag6ronde2)
        {
            echo $_SESSION['speler10'] = $row10['voornaam'] . " " . $row10['achternaam'];
            echo $_SESSION['ronde2speler9-10'] = $row10['voornaam'] . " " . $row10['achternaam'];
            echo $_SESSION['ronde3speler5-6'] = $row10['voornaam'] . " " . $row10['achternaam'];
        }
        if ($uitslag10 > $uitslag9 && $uitslag5ronde2 > $uitslag6ronde2 && $uitslag3ronde3 > $uitslag4ronde3 )
        {
            echo $_SESSION['speler10'] = $row10['voornaam'] . " " . $row10['achternaam'];
            echo $_SESSION['ronde2speler9-10'] = $row10['voornaam'] . " " . $row10['achternaam'];
            echo $_SESSION['ronde3speler5-6'] = $row10['voornaam'] . " " . $row10['achternaam'];
            echo $_SESSION['ronde4speler3-4'] = $row10['voornaam'] . " " . $row10['achternaam'];
        }
        else{echo $_SESSION['speler10'] = $row10['voornaam'] . " " . $row10['achternaam'];}}

    //Random Speler 11
    $randuser11 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id11'"; $Result11 = mysqli_query($conn, $randuser11);
    while($row11 = mysqli_fetch_assoc($Result11))
    {
        if ($uitslag11 > $uitslag12){
            echo $_SESSION['speler11'] = $row11['voornaam'] . " " . $row11['achternaam'];
            echo $_SESSION['ronde2speler11-12'] = $row11['voornaam'] . " " . $row11['achternaam'];
        }
        if ($uitslag11> $uitslag12 && $uitslag6ronde2 > $uitslag5ronde2)
        {
            echo $_SESSION['speler11'] = $row11['voornaam'] . " " . $row11['achternaam'];
            echo $_SESSION['ronde2speler11-12'] = $row11['voornaam'] . " " . $row11['achternaam'];
            echo $_SESSION['ronde3speler5-6'] = $row11['voornaam'] . " " . $row11['achternaam'];
        }
        if ($uitslag11 > $uitslag12 && $uitslag6ronde2 > $uitslag5ronde2 && $uitslag3ronde3 > $uitslag4ronde3 )
        {
            echo $_SESSION['speler11'] = $row11['voornaam'] . " " . $row11['achternaam'];
            echo $_SESSION['ronde2speler11-12'] = $row11['voornaam'] . " " . $row11['achternaam'];
            echo $_SESSION['ronde3speler5-6'] = $row11['voornaam'] . " " . $row11['achternaam'];
            echo $_SESSION['ronde4speler3-4'] = $row11['voornaam'] . " " . $row11['achternaam'];
        }
        else{echo $_SESSION['speler11'] = $row11['voornaam'] . " " . $row11['achternaam'];}}

    //Random Speler 12
    $randuser12 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id12'"; $Result12 = mysqli_query($conn, $randuser12);
    while($row12 = mysqli_fetch_assoc($Result12))
    {
        if ($uitslag12 > $uitslag11){
            echo $_SESSION['speler12'] = $row12['voornaam'] . " " . $row12['achternaam'];
            echo $_SESSION['ronde2speler11-12'] = $row12['voornaam'] . " " . $row12['achternaam'];
        }
        if ($uitslag12> $uitslag11 && $uitslag6ronde2 > $uitslag5ronde2)
        {
            echo $_SESSION['speler12'] = $row12['voornaam'] . " " . $row12['achternaam'];
            echo $_SESSION['ronde2speler11-12'] = $row12['voornaam'] . " " . $row12['achternaam'];
            echo $_SESSION['ronde3speler5-6'] = $row12['voornaam'] . " " . $row12['achternaam'];
        }
        if ($uitslag12 > $uitslag11 && $uitslag6ronde2 > $uitslag5ronde2 && $uitslag3ronde3 > $uitslag4ronde3 )
        {
            echo $_SESSION['speler12'] = $row12['voornaam'] . " " . $row12['achternaam'];
            echo $_SESSION['ronde2speler11-12'] = $row12['voornaam'] . " " . $row12['achternaam'];
            echo $_SESSION['ronde3speler5-6'] = $row12['voornaam'] . " " . $row12['achternaam'];
            echo $_SESSION['ronde4speler3-4'] = $row12['voornaam'] . " " . $row12['achternaam'];
        }
        else{echo $_SESSION['speler12'] = $row12['voornaam'] . " " . $row12['achternaam'];}}

    //Random Speler 13
    $randuser13 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id13'"; $Result13 = mysqli_query($conn, $randuser13);
    while($row13 = mysqli_fetch_assoc($Result13))
    {
        if ($uitslag13 > $uitslag14){
            echo $_SESSION['speler13'] = $row13['voornaam'] . " " . $row13['achternaam'];
            echo $_SESSION['ronde2speler13-14'] = $row13['voornaam'] . " " . $row13['achternaam'];
        }
        if ($uitslag13> $uitslag14 && $uitslag7ronde2 > $uitslag8ronde2)
        {
            echo $_SESSION['speler13'] = $row13['voornaam'] . " " . $row13['achternaam'];
            echo $_SESSION['ronde2speler13-14'] = $row13['voornaam'] . " " . $row13['achternaam'];
            echo $_SESSION['ronde3speler7-8'] = $row13['voornaam'] . " " . $row13['achternaam'];
        }
        if ($uitslag13 > $uitslag14 && $uitslag7ronde2 > $uitslag8ronde2 && $uitslag4ronde3 > $uitslag3ronde3 )
        {
            echo $_SESSION['speler13'] = $row13['voornaam'] . " " . $row13['achternaam'];
            echo $_SESSION['ronde2speler13-14'] = $row13['voornaam'] . " " . $row13['achternaam'];
            echo $_SESSION['ronde3speler7-8'] = $row13['voornaam'] . " " . $row13['achternaam'];
            echo $_SESSION['ronde4speler3-4'] = $row13['voornaam'] . " " . $row13['achternaam'];
        }
        else{echo $_SESSION['speler13'] = $row13['voornaam'] . " " . $row13['achternaam'];}}

    //Random Speler 14
    $randuser14 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id14'"; $Result14 = mysqli_query($conn, $randuser14);
    while($row14 = mysqli_fetch_assoc($Result14))
    {
        if ($uitslag14 > $uitslag13){
            echo $_SESSION['speler14'] = $row14['voornaam'] . " " . $row14['achternaam'];
            echo $_SESSION['ronde2speler13-14'] = $row14['voornaam'] . " " . $row14['achternaam'];
        }
        if ($uitslag14> $uitslag13 && $uitslag7ronde2 > $uitslag8ronde2)
        {
            echo $_SESSION['speler14'] = $row14['voornaam'] . " " . $row14['achternaam'];
            echo $_SESSION['ronde2speler13-14'] = $row14['voornaam'] . " " . $row14['achternaam'];
            echo $_SESSION['ronde3speler7-8'] = $row14['voornaam'] . " " . $row14['achternaam'];
        }
        if ($uitslag14 > $uitslag13 && $uitslag7ronde2 > $uitslag8ronde2 && $uitslag4ronde3 > $uitslag3ronde3 )
        {
            echo $_SESSION['speler14'] = $row14['voornaam'] . " " . $row14['achternaam'];
            echo $_SESSION['ronde2speler13-14'] = $row14['voornaam'] . " " . $row14['achternaam'];
            echo $_SESSION['ronde3speler7-8'] = $row14['voornaam'] . " " . $row14['achternaam'];
            echo $_SESSION['ronde4speler3-4'] = $row14['voornaam'] . " " . $row14['achternaam'];
        }
        else{echo $_SESSION['speler14'] = $row14['voornaam'] . " " . $row14['achternaam'];}}

    //Random Speler 15
    $randuser15 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id15'"; $Result15 = mysqli_query($conn, $randuser15);
    while($row15 = mysqli_fetch_assoc($Result15))
    {
        if ($uitslag15 > $uitslag16){
            echo $_SESSION['speler15'] = $row15['voornaam'] . " " . $row15['achternaam'];
            echo $_SESSION['ronde2speler15-16'] = $row15['voornaam'] . " " . $row15['achternaam'];
        }
        if ($uitslag15> $uitslag16 && $uitslag8ronde2 > $uitslag7ronde2)
        {
            echo $_SESSION['speler15'] = $row15['voornaam'] . " " . $row15['achternaam'];
            echo $_SESSION['ronde2speler15-16'] = $row15['voornaam'] . " " . $row15['achternaam'];
            echo $_SESSION['ronde3speler7-8'] = $row15['voornaam'] . " " . $row15['achternaam'];
        }
        if ($uitslag15 > $uitslag16 && $uitslag8ronde2 > $uitslag7ronde2 && $uitslag4ronde3 > $uitslag3ronde3 )
        {
            echo $_SESSION['speler15'] = $row15['voornaam'] . " " . $row15['achternaam'];
            echo $_SESSION['ronde2speler15-16'] = $row15['voornaam'] . " " . $row15['achternaam'];
            echo $_SESSION['ronde3speler7-8'] = $row15['voornaam'] . " " . $row15['achternaam'];
            echo $_SESSION['ronde4speler3-4'] = $row15['voornaam'] . " " . $row15['achternaam'];
        }
        else{echo $_SESSION['speler15'] = $row15['voornaam'] . " " . $row15['achternaam'];}}

    //Random Speler 16
    $randuser16 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id16'"; $Result16 = mysqli_query($conn, $randuser16);
    while($row16 = mysqli_fetch_assoc($Result16))
    {
        if ($uitslag16 > $uitslag15){
            echo $_SESSION['speler16'] = $row16['voornaam'] . " " . $row16['achternaam'];
            echo $_SESSION['ronde2speler15-16'] = $row16['voornaam'] . " " . $row16['achternaam'];
        }
        if ($uitslag16> $uitslag15 && $uitslag8ronde2 > $uitslag7ronde2)
        {
            echo $_SESSION['speler16'] = $row16['voornaam'] . " " . $row16['achternaam'];
            echo $_SESSION['ronde2speler15-16'] = $row16['voornaam'] . " " . $row16['achternaam'];
            echo $_SESSION['ronde3speler7-8'] = $row16['voornaam'] . " " . $row16['achternaam'];
        }
        if ($uitslag16 > $uitslag15 && $uitslag8ronde2 > $uitslag7ronde2 && $uitslag4ronde3 > $uitslag3ronde3 )
        {
            echo $_SESSION['speler16'] = $row16['voornaam'] . " " . $row16['achternaam'];
            echo $_SESSION['ronde2speler15-16'] = $row16['voornaam'] . " " . $row16['achternaam'];
            echo $_SESSION['ronde3speler7-8'] = $row16['voornaam'] . " " . $row16['achternaam'];
            echo $_SESSION['ronde4speler3-4'] = $row16['voornaam'] . " " . $row16['achternaam'];
        }
        else{echo $_SESSION['speler16'] = $row16['voornaam'] . " " . $row16['achternaam'];}}


    ?>