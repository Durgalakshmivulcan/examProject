<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exampage1</title>
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">

    <style type="text/css">
        .bg {
            background-color: #d7d7d7;
            background-image: url("/sites/vulcan/Style%20Library/dl-test/bg.jpg");
            background-repeat: no-repeat;
        }

        .fieldset {  
            border: #00cc00 2px solid;  
            padding: 10px;  
            color: green;  
        }
    </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <div class="container-fluid">
        <div class="row">
            <div class="card text-center bg mt-5" style="width: 500px; box-shadow: 10px grey;margin-left:400px;">
                <h1><center><span style="color:rgb(152, 31, 144);">Employee Details</span></center></h1>
                <table border="0px">
                    <tr>
                        <td>First Name<span style="color:red;">*</span></td>
                        <td>:</td>
                        <td><input class="form-control mt-4" type="text" name="fname" id="fname" value=""></td>
                    </tr>
                    <tr>
                        <td>Last Name<span style="color:red;">*</span></td>
                        <td>:</td>
                        <td><input class="form-control mt-4" type="text" name="lname" id="lname" value=""></td>
                    </tr>
                    <tr>
                        <td>Date of birth<span style="color:red;">*</span></td>
                        <td>:</td>
                        <td><input class="form-control mt-4" type="date" name="dob" id="dob" value=""></td>
                    </tr>
                    <tr>
                        <td>Address<span style="color:red;">*</span></td>
                        <td>:</td>
                        <td><input class="form-control mt-4" type="textarea" name="address" id="address" value=""></td>
                    </tr>
                    <tr>
                        <td>Contact Number<span style="color:red;">*</span></td>
                        <td>:</td>
                        <td><input class="form-control mt-4" type="tel" name="con" id="con" value=""></td>
                    </tr>
                    <tr>
                        <td>Photo<span style="color:red;">*</span></td>
                        <td>:</td>
                        <td><input class="form-control mt-4" type="file" name="pic" id="pic" value=""></td>
                    </tr>
                    
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input class="btn btn-warning my-4 text-center" onclick="Sample()" type="button" name="save" id="save"          value="Register">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="//ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"type="text/javascript"></script>
    <script type="text/javascript"src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        function Sample() {
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var dob = $('#dob').val();
            var address = $('#address').val();
            var con = $('#con').val();
            var pic = $('#pic').val();

            if (!fname || !lname || !dob || !address || !con || !pic) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill in all required fields!',
                });
                return;
            }

            var newItemData = {
                "__metadata": { "type": "SP.Data.EmployeesInfoListItem" }, // Replace with the correct type
                "Title": fname + " " + lname,
                "FirstName": fname,
                "LastName": lname,
                "DateOfBirth": dob,
                "Address": address,
                "ContactNumber": con,
                "Photo": pic // Assuming "Photo" is the internal name of your column for storing the file
                // Add other fields as needed
            };

            addNewItemInList(newItemData);
        }

        function addNewItemInList(data) {
            var restUrl = "https://vulcantechs677.sharepoint.com/sites/vulcan/_api/web/lists/getbytitle('Employees_info')/items";

            $.ajax({
                url: restUrl,
                type: "POST",
                data: JSON.stringify(data),
                contentType: "application/json;odata=verbose",
                headers: {
                    "Accept": "application/json;odata=verbose",
                    "X-RequestDigest": $("#__REQUESTDIGEST").val(),
                    "X-HTTP-Method": "POST",
                    "IF-MATCH": "*"
                },
                success: function (data) {
                    console.log("Item added successfully:", data);
                },
                error: function (error) {
                    console.log("Error adding item:", JSON.stringify(error));
                }
            });
        }

            function getListItems() {
    var restUrl = "https://vulcantechs677.sharepoint.com/sites/vulcan/_api/web/lists/getbytitle('Employees_info')/items";
            $.ajax({
                url: restUrl,
                type: "GET",
                headers: {
                    "Accept": "application/json;odata=verbose"
                },
                cache: false,
                success: function (data) {
                    displayListItems(data.d.results);
                },
                error: function (error) {
                    alert(JSON.stringify(error));
                }
            });
        }




// function updateListItemInList()  
// {  
//     var restUrl = "https://vulcantechs677.sharepoint.com/sites/vulcan/_api/web/lists/getbytitle('Employees_info')/items";

//     $.ajax({  
//         url: restUrl,
//         type: "POST",  
//         data: JSON.stringify  
//         ({  
//             __metadata:  
//             {  
//                 type: "SP.Data.SpListCRUDListItem"  
//             },  
//             Title: ‘Some Value’  
//         }),  
//         headers:  
//         {  
//             "Accept": "application/json;odata=verbose",  
//             "Content-Type": "application/json;odata=verbose",  
//             "X-RequestDigest": $("#__REQUESTDIGEST").val(),  
//             "IF-MATCH": "*",  
//             "X-HTTP-Method": "MERGE"  
//         },  
//         success: function(data)  
//         {  
//             console.log(data);  
//         },  
//         error: function(error)  
//         {  
//             console.log(JSON.stringify(error));  
//         }  
//     });
// }


function deleteListItemInList()  
{  
    var restUrl = "https://vulcantechs677.sharepoint.com/sites/vulcan/_api/web/lists/getbytitle('Employees_info')/items";

    $.ajax({  
        url: restUrl,  
        type: "POST",  
        headers:  
        {  
            "X-RequestDigest": $("#__REQUESTDIGEST").val(),  
            "IF-MATCH": "*",  
            "X-HTTP-Method": "DELETE"  
        },  
        success: function(data)  
        {  
            console.log(data);  
        },  
        error: function(error)  
        {  
            console.log(error);  
        }  
    });  
}  

        // Function to display list items on the page
        function displayListItems(items) {
            var listItemsContainer = $("#listItems");
            listItemsContainer.empty();

            items.forEach(function (item) {
                var listItem = $("<li>").text("Title: " + item.Title + " - Description: " + item.Description);
                listItemsContainer.append(listItem);
            });
        }
    

    </script>

</body>
</html>
