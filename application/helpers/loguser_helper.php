<?php


function userLog($aksi, $id)
{
    $CI = &get_instance();
    $data = [
        'id_logs' => '',
        'kegiatan' => $aksi,
        'waktu' => date_format(date_create(), "Y-m-d"),
        'id_pegawai' => $id
    ];
    $CI->db->insert('logs', $data);
}
