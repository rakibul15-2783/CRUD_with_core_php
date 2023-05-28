jQuery(document).ready(function() {
    jQuery(document).on("click", ".add-btn", function() {
        var name = jQuery(".category-name").val();
        var des = jQuery(".category-des").val();
        var price = jQuery(".category-price").val();
        var status = jQuery(".category-status").val();

        jQuery.ajax({
            url: "process.php",
            type: "post",
            data: {
                name: name,
                des: des,
                price: price,
                status: status,
                action: "insert"
            },
            success: function(res) {
                alert(res);
                show();
            }
        });
    });
    show();

    function show() {
        jQuery.ajax({
            url: "process.php",
            type: "post",
            data: {
                action: "show"
            },

            success: function(res) {
                jQuery(".alldata").html(res);
            }
        })
    }

    jQuery(document).on("click", ".active-btn", function() {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "post",
            data: {
                id: id,
                action: "active"
            },
            success: function(res) {
                alert(res);
                show();
            }
        })
    })
    jQuery(document).on("click", ".inactive-btn", function() {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "post",
            data: {
                id: id,
                action: "inactive"
            },
            success: function(res) {
                alert(res);
                show();
            }
        })
    })
    jQuery(document).on("click", ".delete-btn", function() {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "post",
            data: {
                id: id,
                action: "delete"

            },
            success: function(res) {
                alert(res);
                show();
            }
        })
    })
    jQuery(document).on("click", ".edit-btn", function() {
        jQuery(".btn").hide();
        jQuery(".update-btn").show();
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "post",
            dataType: "json",
            data: {
                id: id,
                action: "edit"

            },
            success: function(res) {
                jQuery(".category-name").val(res.name);
                jQuery(".category-des").val(res.des);
                jQuery(".category-price").val(res.price);
                jQuery(".category-status").val(res.status);
                jQuery(".update-btn").val(res.id);
                show();

            }
        })
    })
    jQuery(document).on("click", ".update-btn", function() {
        var id = jQuery(this).val();
        var name = jQuery(".category-name").val();
        var des = jQuery(".category-des").val();
        var price = jQuery(".category-price").val();
        var status = jQuery(".category-status").val();

        jQuery.ajax({
            url: "process.php",
            type: "post",
            data: {
                id: id,
                name: name,
                des: des,
                price: price,
                status: status,
                action: "update"
            },
            success: function(res) {
                alert(res);
                show();
            }
        });
    });


})