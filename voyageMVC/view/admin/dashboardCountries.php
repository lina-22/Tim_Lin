<?php
$title="Dashboard";
ob_start();?>
    <div class="container-fluid row">
        <?php require("view/fragments/menuDashboard.php"); ?>
        <div class="container col-9">
            <h1>Dasboard Countries</h1>
<!--            idCountry	name	population	region	subregion	flag	capital-->
            <table class="table my-3">
                <theader>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Population</th>
                        <th>Region</th>
                        <th>Subregion</th>
                        <th>Flag</th>
                        <th>Capital</th>
                        <th>Actions</th>
                    </tr>
                </theader>
                <tbody>
                <?php foreach($countries as $country){?>
                    <tr>
                        <td><?=$country->getIdCountry()?></td>
                        <td><?=$country->getName()?></td>
                        <td><?=$country->getPopulation()?></td>
                        <td><?=$country->getRegion()?></td>
                        <td><?=$country->getSubregion()?></td>
                        <td><?=$country->getFlag()?></td>
                        <td><?=$country->getCapital()?></td>
                        <!--      TODO href (du l'ancre) et action (du form)   -->
                        <td> <a href="" class="btn btn-success">Update</a>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="">
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
$content=ob_get_clean();
require("view/template.php");