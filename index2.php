<hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  id="day">
           <?php
           // TODO list of day
           $day = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
           for ($i = 0; $i < 31; $i++) {
               echo "<option>$day[$i] </option>";
           } ?>

       </select>

       <label for="month">Month</label>
       <select  id="month">
           <?php
           // TODO list of month
           $month = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
           for($i = 0; $i < 12; $i++) {
               echo "<option>$month[$i] </option>";
           } ?>
       </select>

         <label for="year">Year</label>
       <select  id="year">
           <?php
           // TODO list of year 2018, 2019, 2020 --> Bonus : faites le avec une vraie date en PHP, renseignez vous sur la doc
           $year = [2018, 2019, 2020, 2021, 2022];
           for($i = 0; $i < 5; $i++){
               echo "<option>$year[$i] </option>";
           } ?>

       </select>
     </form>
  </body>
</html>