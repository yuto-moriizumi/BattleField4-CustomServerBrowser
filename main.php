<?php

//echo file_get_contents('https://battlelog.battlefield.com/bf4/ja/servers/getServers/pc/?offset=60&count=60&filtered=1&expand=1&settings=&useLocation=1&useAdvanced=1&gameexpansions=-1&q=&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&mapRotation=-1&modeRotation=-1&password=-1&osls=-1&vvsa=-1&vffi=-1&vaba=-1&vkca=-1&v3ca=-1&v3sp=-1&vmsp=-1&vrhe=-1&vhud=-1&vmin=-1&vnta=-1&vbdm-min=1&vbdm-max=300&vprt-min=1&vprt-max=300&vshe-min=1&vshe-max=300&vtkk-min=1&vtkk-max=99&vnit-min=30&vnit-max=86400&vtkc-min=1&vtkc-max=99&vvsd-min=0&vvsd-max=500&vgmc-min=0&vgmc-max=500');

//https://battlelog.battlefield.com/bf4/ja/servers/pc/?filtered=1&expand=1&settings=&useLocation=1&useAdvanced=1&gameexpansions=-1&slots=1&slots=2&slots=4&q=&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&mapRotation=-1&modeRotation=-1&password=-1&regions=32&osls=-1&vvsa=-1&vffi=-1&vaba=-1&vkca=-1&v3ca=-1&v3sp=-1&vmsp=-1&vrhe=-1&vhud=-1&vmin=-1&vnta=-1&vbdm-min=1&vbdm-max=300&vprt-min=1&vprt-max=300&vshe-min=1&vshe-max=300&vtkk-min=1&vtkk-max=99&vnit-min=30&vnit-max=86400&vtkc-min=1&vtkc-max=99&vvsd-min=0&vvsd-max=500&vgmc-min=0&vgmc-max=500
//https://battlelog.battlefield.com/bf4/ja/servers/getServers/pc/?offset=60&count=60&filtered=1&expand=1&settings=&useLocation=1&useAdvanced=1&gameexpansions=-1&slots=1&slots=2&slots=4&q=&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&mapRotation=-1&modeRotation=-1&password=-1&regions=32&osls=-1&vvsa=-1&vffi=-1&vaba=-1&vkca=-1&v3ca=-1&v3sp=-1&vmsp=-1&vrhe=-1&vhud=-1&vmin=-1&vnta=-1&vbdm-min=1&vbdm-max=300&vprt-min=1&vprt-max=300&vshe-min=1&vshe-max=300&vtkk-min=1&vtkk-max=99&vnit-min=30&vnit-max=86400&vtkc-min=1&vtkc-max=99&vvsd-min=0&vvsd-max=500&vgmc-min=0&vgmc-max=500

//ここで確定
//https://battlelog.battlefield.com/bf4/ja/servers/getServers/pc/?offset=60&count=60&filtered=1&expand=1&settings=&useLocation=1&useAdvanced=1&gameexpansions=-1&q=&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&mapRotation=-1&modeRotation=-1&password=-1&osls=-1&vvsa=-1&vffi=-1&vaba=-1&vkca=-1&v3ca=-1&v3sp=-1&vmsp=-1&vrhe=-1&vhud=-1&vmin=-1&vnta=-1&vbdm-min=1&vbdm-max=300&vprt-min=1&vprt-max=300&vshe-min=1&vshe-max=300&vtkk-min=1&vtkk-max=99&vnit-min=30&vnit-max=86400&vtkc-min=1&vtkc-max=99&vvsd-min=0&vvsd-max=500&vgmc-min=0&vgmc-max=500

$url = "https://battlelog.battlefield.com/bf4/ja/servers/getServers/pc/?offset=60&count=60&filtered=1&expand=1&settings=&useLocation=1&useAdvanced=1&gameexpansions=-1&q=&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&mapRotation=-1&modeRotation=-1&password=-1&osls=-1&vvsa=-1&vffi=-1&vaba=-1&vkca=-1&v3ca=-1&v3sp=-1&vmsp=-1&vrhe=-1&vhud=-1&vmin=-1&vnta=-1&vbdm-min=1&vbdm-max=300&vprt-min=1&vprt-max=300&vshe-min=1&vshe-max=300&vtkk-min=1&vtkk-max=99&vnit-min=30&vnit-max=86400&vtkc-min=1&vtkc-max=99&vvsd-min=0&vvsd-max=500&vgmc-min=0&vgmc-max=500";
$ch = curl_init(); // はじめ

//オプション
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    "Host: battlelog.battlefield.com",
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:76.0) Gecko/20100101 Firefox/76.0",
    "Accept: */*",
    "Accept-Language: ja,en-US;q=0.7,en;q=0.3",
    "Accept-Encoding: gzip, deflate, br",
    "X-Requested-With: XMLHttpRequest",
    "Connection: keep-alive",
    "Referer: https://battlelog.battlefield.com/bf4/ja/servers/pc/?filtered=1&expand=1&settings=&useLocation=1&useAdvanced=1&gameexpansions=-1&q=&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&mapRotation=-1&modeRotation=-1&password=-1&osls=-1&vvsa=-1&vffi=-1&vaba=-1&vkca=-1&v3ca=-1&v3sp=-1&vmsp=-1&vrhe=-1&vhud=-1&vmin=-1&vnta=-1&vbdm-min=1&vbdm-max=300&vprt-min=1&vprt-max=300&vshe-min=1&vshe-max=300&vtkk-min=1&vtkk-max=99&vnit-min=30&vnit-max=86400&vtkc-min=1&vtkc-max=99&vvsd-min=0&vvsd-max=500&vgmc-min=0&vgmc-max=500",
    "Cookie: __utma=22379560.1232573815.1588342788.1588682862.1588945287.14; __utmz=22379560.1588664420.10.2.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); __utmv=22379560.|1=userid=2842693795=1^4=Customer=NO=1^31=Platform=N%2FA=1; ssoremember=1; comcenter.flushedOk=1; beaker.session.id=4d584be420ec7bf887a749be0e13ba9f; ak_bmsc=879435F3FD35F0BBA482D9CB2E8B919A684F0AD6723F00008761B55EF739E768~plTDVznq2Oi/lnoI9IW4yPuF81fQQ6otweX7ozDDaOCPcsTcb4hxrjeWrdwcpzsaeaCXAIeduwU2Ez7gfhBkA48y7vUbDpMiXSOulGnOyem79QQuDznop4GJKoWOYFFqkpe3yuglxMfas1aShOcJzUeSNr0eu2l3VOEuZwokxDoLMJTE/BKBbFeXpBtLkUk2QUZxP0NM2amXsWP27lQsylwhcTa3HPH58Gx8cDKUXqWBEmnF6R0mcGogkLyMEnNLt5; bm_sv=22D708D448B8F67B6B182573456963FC~5+dVnNtGuJrWeWat4MImPdAE1Ev9ze23j852xIqSMdnkotqAxmSDTQgcodH5HcHALwf8tK3H0EjU846A73jtR16bqXEZUbyafnLmyHZ2Q6dA5paAlftjimaSEG8NrSHYzWR2kdsH4c/gho0WplWT6EiBApgvH5wBYUjX9Y+KCik=; __utmb=22379560.58.9.1588951624812; __utmc=22379560; __utmt=1",
]);
$html = curl_exec($ch);
var_dump($html);
curl_close($ch); //終了
