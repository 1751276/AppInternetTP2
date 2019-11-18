<?php
$urlToRestApi = $this->Url->build('/api/places', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Places/index', ['block' => 'scriptBottom']);
?>

<div class="container">
    <div class="row">
        <div class="panel panel-default places-content">
            <div class="panel-heading">Places <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add Places</h2>
                <form class="form" id="placeAddForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="placeAction('add')">Add Place</a>
                    <!-- input type="submit" class="btn btn-success" id="addButton" value="Add Place" -->
                </form>
            </div>
            <!--<div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit Place</h2>
                <form class="form" id="placeEditForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="nameEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="placeAction('edit')">Update Place</a>
                     input type="submit" class="btn btn-success" id="editButton" value="Update Place"-->
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="placeData">
                    <?php
                    $count = 0;
                    foreach ($places as $place): $count++;
                        ?>
                        <tr>
                            <td><?php echo '#' . $count; ?></td>
                            <td><?php echo $place['name']; ?></td>
                            <td>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editPlace('<?php echo $place['id']; ?>')"></a>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? placeAction('delete', '<?php echo $place['id']; ?>') : false;"></a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

