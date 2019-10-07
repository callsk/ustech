<?php
use app\models\Team;
use app\models\Player;
$teams = Team::find()->all();
$player = Player::find()->all();
?>
<div class="site-index">

    <div class="jumbotron" style="display: none">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div>
                <div>
                    <table width="65%">
                        <tr>
                            <td>
                                <table style="margin:50px 100px;border:1px solid #CCC">
                                    <tr>
                                        <td style="border: 1px solid;padding:4px 10px;color: #FFF; background: #337ab7;width:200px">Team</td>
                                    </tr>
                                    <tr>
                                        <td align="center"><?php echo count($teams)?></td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table style="margin:10px;border:1px solid #CCC">
                                    <tr>
                                        <td style="border: 1px solid;padding:4px 10px;color: #FFF; background: #337ab7;width:200px">Player</td>
                                    </tr>
                                    <tr>
                                        <td align="center"><?php echo count($player)?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
