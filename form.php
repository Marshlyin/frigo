<?php

echo('
<section class="is-centered">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <form action="./insert.php" method="post">
                        <div class="field">
                            <label class="label">Food : </label> 
                            <div class="control">
                                <input class="input" type="text" placeholder="Beef, Salmon..." name="food" required> 
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Expiration Date : </label>
                            <div class="control">
                                <input class="input" type="date" name="exp_date" required>
                            </div>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="submit" class="button is-primary" value="Add to Fridge" >
                                </div>
                            </div>
                         </div>                
                    </form>
                </div>
            </div>
        </div>
</section>
                ');