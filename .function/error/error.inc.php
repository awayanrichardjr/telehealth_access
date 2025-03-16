<?php

// error
function error_reg_admin(
    $adminFname,
    $adminMname,
    $adminLname,
    $adminAddress,
    $adminBdate,
    $adminContact,
    $adminEmail,
    $adminPass,
    $adminConfirm
) {
    // admin
    if (empty($adminFname)) {
        header("location: ../public/reg_admin.php?adminFnameErr= empty field");
        exit();
    }
    if (empty($adminMname)) {
        header("location: ../public/reg_admin.php?adminMnameErr= empty field");
        exit();
    }
    if (empty($adminLname)) {
        header("location: ../public/reg_admin.php?adminLnameErr= empty field");
        exit();
    }
    // if (empty($adminSuffix)) {
// header("location: ../public/reg_admin.php?adminSuffixErr= empty field");
// exit();
// }
    if (empty($adminAddress)) {
        header("location: ../public/reg_admin.php?adminAddressErr= empty field");
        exit();
    }
    if (empty($adminBdate)) {
        header("location: ../public/reg_admin.php?adminBdateErr= empty field");
        exit();
    }
    if (empty($adminContact)) {
        header("location: ../public/reg_admin.php?adminContactErr= empty field");
        exit();
    }
    if (empty($adminEmail)) {
        header("location: ../public/reg_admin.php?adminEmailErr= empty field");
        exit();
    }
    if (empty($adminPass)) {
        header("location: ../public/reg_admin.php?adminPassErr= empty field");
        exit();
    }
    if (empty($adminConfirm)) {
        header("location: ../public/reg_admin.php?adminConfirmErr= empty field");
        exit();
    }
    // qrbqwobsajdcnqaiwofhbqiwd
}

function error_reg_doc(
    $docFname,
    $docMname,
    $docLname,
    $docAddress,
    $docBdate,
    $docContact,
    $docEmail,
    $docPass,
    $docConfirm
) {
    // doc
    if (empty($docFname)) {
        header("location: ../public/reg_doc.php?docFnameErr= empty field");
        exit();
    }
    if (empty($docMname)) {
        header("location: ../public/reg_doc.php?docMnameErr= empty field");
        exit();
    }
    if (empty($docLname)) {
        header("location: ../public/reg_doc.php?docLnameErr= empty field");
        exit();
    }
    // if (empty($docSuffix)) {
// header("location: ../public/reg_doc.php?docSuffixErr= empty field");
// exit();
// }
    if (empty($docAddress)) {
        header("location: ../public/reg_doc.php?docAddressErr= empty field");
        exit();
    }
    if (empty($docBdate)) {
        header("location: ../public/reg_doc.php?docBdateErr= empty field");
        exit();
    }
    if (empty($docContact)) {
        header("location: ../public/reg_doc.php?docContactErr= empty field");
        exit();
    }
    // if (empty($docSpecialty)) {
// header("location: ../public/reg_doc.php?docSpecialtyErr= empty field");
// exit();
// }
    if (empty($docEmail)) {
        header("location: ../public/reg_doc.php?docEmailErr= empty field");
        exit();
    }
    if (empty($docPass)) {
        header("location: ../public/reg_doc.php?docPassErr= empty field");
        exit();
    }
    if (empty($docConfirm)) {
        header("location: ../public/reg_doc.php?docConfirmErr= empty field");
        exit();
    }
}

function error_reg_p($pFname, $pMname, $pLname, $pAddress, $pBdate, $pContact, $pEmail, $pPass, $pConfirm)
{
    // p
    if (empty($pFname)) {
        header("location: ../public/reg_p.php?pFnameErr= empty field");
        exit();
    }
    if (empty($pMname)) {
        header("location: ../public/reg_p.php?pMnameErr= empty field");
        exit();
    }
    if (empty($pLname)) {
        header("location: ../public/reg_p.php?pLnameErr= empty field");
        exit();
    }
    // if (empty($pSuffix)) {
// header("location: ../public/reg_p.php?pSuffixErr= empty field");
// exit();
// }
    if (empty($pAddress)) {
        header("location: ../public/reg_p.php?pAddressErr= empty field");
        exit();
    }
    if (empty($pBdate)) {
        header("location: ../public/reg_p.php?pBdateErr= empty field");
        exit();
    }
    if (empty($pContact)) {
        header("location: ../public/reg_p.php?pContactErr= empty field");
        exit();
    }
    if (empty($pEmail)) {
        header("location: ../public/reg_p.php?pEmailErr= empty field");
        exit();
    }
    if (empty($pPass)) {
        header("location: ../public/reg_p.php?pPassErr= empty field");
        exit();
    }
    if (empty($pConfirm)) {
        header("location: ../public/reg_p.php?pConfirmErr= empty field");
        exit();
    }
}

function error_consult_doc(
    $conName,
    $conAddress,
    $conBdate,
    $conContact,
    $conEmail,
    $conSelectedDoc,
    $conDocSpecialty,
    $conADateTime,
    $conDiagnose,
    $conConcern
) {
    // consult
    if (empty($conName)) {
        header("location: ../public/consult_selected_doc.php?conNameErr= empty field");
        exit();
    }
    if (empty($conAddress)) {
        header("location: ../public/consult_selected_doc.php?conAddressErr= empty field");
        exit();
    }
    if (empty($conBdate)) {
        header("location: ../public/consult_selected_doc.php?conBdateErr= empty field");
        exit();
    }
    if (empty($conContact)) {
        header("location: ../public/consult_selected_doc.php?conContactErr= empty field");
        exit();
    }
    if (empty($conEmail)) {
        header("location: ../public/consult_selected_doc.php?conEmailErr= empty field");
        exit();
    }
    if (empty($conSelectedDoc)) {
        header("location: ../public/consult_selected_doc.php?conSelectedDocErr= empty field");
        exit();
    }
    if (empty($conDocSpecialty)) {
        header("location: ../public/consult_selected_doc.php?conDocSpecialtyErr= empty field");
        exit();
    }

    // date time
    if (empty($conADateTime)) {
        header("location: ../public/consult_selected_doc.php?conADateTimeErr= empty field");
        exit();
    }
    if (empty($conDiagnose)) {
        header("location: ../public/consult_selected_doc.php?conDiagnoseErr= empty field");
        exit();
    }
    if (empty($conConcern)) {
        header("location: ../public/consult_selected_doc.php?conConcernErr= empty field");
        exit();
    }
    // qrbqwobsajdcnqaiwofhbqiwd
}

function error_edit_doc(
    $docFname,
    $docMname,
    $docLname,
    $docAddress,
    $docBdate,
    $docContact,
    $docEmail,
    $docPass,
    $docConfirm
) {
    // doc
    if (empty($docFname)) {
        header("location: ../public/edit_doc.php?docFnameErr= empty field");
        exit();
    }
    if (empty($docMname)) {
        header("location: ../public/edit_doc.php?docMnameErr= empty field");
        exit();
    }
    if (empty($docLname)) {
        header("location: ../public/edit_doc.php?docLnameErr= empty field");
        exit();
    }
    // if (empty($docSuffix)) {
// header("location: ../public/edit_doc.php?docSuffixErr= empty field");
// exit();
// }
    if (empty($docAddress)) {
        header("location: ../public/edit_doc.php?docAddressErr= empty field");
        exit();
    }
    if (empty($docBdate)) {
        header("location: ../public/edit_doc.php?docBdateErr= empty field");
        exit();
    }
    if (empty($docContact)) {
        header("location: ../public/edit_doc.php?docContactErr= empty field");
        exit();
    }
    // if (empty($docSpecialty)) {
// header("location: ../public/edit_doc.php?docSpecialtyErr= empty field");
// exit();
// }
    if (empty($docEmail)) {
        header("location: ../public/edit_doc.php?docEmailErr= empty field");
        exit();
    }
    if (empty($docPass)) {
        header("location: ../public/edit_doc.php?docPassErr= empty field");
        exit();
    }
    if (empty($docConfirm)) {
        header("location: ../public/edit_doc.php?docConfirmErr= empty field");
        exit();
    }
}

function error_edit_p($pFname, $pMname, $pLname, $pAddress, $pBdate, $pContact, $pEmail, $pPass, $pConfirm)
{
    // p
    if (empty($pFname)) {
        header("location: ../public/edit_p.php?pFnameErr= empty field");
        exit();
    }
    if (empty($pMname)) {
        header("location: ../public/edit_p.php?pMnameErr= empty field");
        exit();
    }
    if (empty($pLname)) {
        header("location: ../public/edit_p.php?pLnameErr= empty field");
        exit();
    }
    // if (empty($pSuffix)) {
// header("location: ../public/edit_p.php?pSuffixErr= empty field");
// exit();
// }
    if (empty($pAddress)) {
        header("location: ../public/edit_p.php?pAddressErr= empty field");
        exit();
    }
    if (empty($pBdate)) {
        header("location: ../public/edit_p.php?pBdateErr= empty field");
        exit();
    }
    if (empty($pContact)) {
        header("location: ../public/edit_p.php?pContactErr= empty field");
        exit();
    }
    // if (empty($pSpecialty)) {
// header("location: ../public/edit_p.php?pSpecialtyErr= empty field");
// exit();
// }
    if (empty($pEmail)) {
        header("location: ../public/edit_p.php?pEmailErr= empty field");
        exit();
    }
    if (empty($pPass)) {
        header("location: ../public/edit_p.php?pPassErr= empty field");
        exit();
    }
    if (empty($pConfirm)) {
        header("location: ../public/edit_p.php?pConfirmErr= empty field");
        exit();
    }
}