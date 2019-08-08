$('#createCompany').click(function() {
  var companyName = ($("#input-company-name").val());
  var companyAddress = ($("#input-ae-address").val());
  var bankName = ($("#input-bank-name").val());
  var bAccountNo = ($("#input-bank-account-number").val());
  var bAccountName = $("#input-bank-account-name").val();
  var db = firebase.firestore();

  db.collection('Companies').doc(companyName).set({
    companyName: companyName,
    companyAddress: companyAddress,
    bankName: bankName,
    bAccountNo: bAccountNo,
    bAccountName: bAccountName
  })
  .then(function() {
    console.log("Company added to firebase successfully!");
  })
  .catch(function(error) {
    console.error("Error adding company to firebase: ", error);
  });
});

$('#editCompany').click(function() {
  var companyName = ($("#input-company-name").val());
  var companyAddress = ($("#input-ae-address").val());
  var bankName = ($("#input-bank-name").val());
  var bAccountNo = ($("#input-bank-account-number").val());
  var bAccountName = $("#input-bank-account-name").val();
  var db = firebase.firestore();

  db.collection('Companies').doc(companyName).update({
    companyName: companyName,
    companyAddress: companyAddress,
    bankName: bankName,
    bAccountNo: bAccountNo,
    bAccountName: bAccountName
  })
  .then(function() {
    console.log("Company updated to firebase successfully!");
  })
  .catch(function(error) {
    console.error("Error updating company to firebase: ", error);
  });
});