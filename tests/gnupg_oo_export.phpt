--TEST--
export a key
--SKIPIF--
<?php if(!class_exists("gnupg")) die("skip"); ?>
--FILE--
<?php
require_once(dirname(__FILE__)."/vars.inc");
$gpg = new gnupg();
$gpg -> seterrormode(gnupg::ERROR_WARNING);
$ret = $gpg -> export($fingerprint);
var_dump($ret);
?>
--EXPECTF--
string(%d) "-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: GnuPG v1.%d.%d (GNU/Linux)

mQGiBENQAKwRBADpy828KU+0SuoetJTrJ5dR86PiO3CsH8K6QRP7wY82Eh/9NTJ3
afRj0FNPaVSP0NciPeM4G4uFoQ3lsIf+FBEPXH1D97/XigWObU8K6ha2/s8wU98z
/samjTHLR+VKZ031B5/8p5Y49yvkkEyBkF1G85yeIXK0WZorKBPncRKuUwCgxOi/
IEa+ZuqHlmlDF2LTRIBOfrkEAK+WLRMWUD0bqj1TYwnxwPWiuns32/ZXLWuPfb5o
crNt7x5LSe7wJhjyIiFhiU0qR33X/FrT2umzOxlRYfINXT9DUHDocxxbED6fxAHw
X2IDd5tWXgCkSBHn2yAneNY6ycPdS3RvqJGlYFg7cOc0kz4urjqRt9fIagzpZQtL
fXHfBACl3EWgvLhVBo5ExZbrtlOA2q0x9UGhhNaSkeBWBr2qDeZErQjMTO0+viaN
/SX0zxeWtM3z06rkUHd1DKORDRM5R7shBTv9/Quojn0gbYbOem+e1mlCe27TRxcP
yeIKk00PqbVuff9QlK9GqKEWGzsEXCmxZ160Dul3CGlf/vQZHbQkdGVzdGtleSAo
dGVzdGtleSkgPHRlc3RAZXhhbXBsZS5uZXQ+iF4EExECAB4FAkNQAKwCGwMGCwkI
BwMCAxUCAwMWAgECHgECF4AACgkQLpbxQbPdKy58pwCcDz9qEBEVt1gcKCwNay0f
m4vLqCkAn1P0KV1giECUVXBuZ5YUndDB1QqtuQENBENQAK0QBACNXzJQG4NHUJqL
PImezbl+ii+93MjMo8LpSlv9Np5ruWIKtxuqmVEe4k+r1DDmSl8hppifpRtx2hef
bDTl8Tdf5MNGvf5JE3AHYUehZ+ldjgYCOZ53fJDgKV65ZidQSGGXsRcyE7SHgMQ6
rTL92PA2IQmkcf9xkg6xM2h55UusMwADBQP9EGQ0BAdWRUtA21/cR6F+t97KZnVS
et225UYv8azv8p8cK4R1lrZXChFadK9Kt+/My4HAx7J7zd1IPuKQ0QniuvuLT3Mw
z19B7FGXaJenwTw0P1ihtmSPq9GAOkOA4ZPhHLl9OFwIeAZzjfshRfvm0haO3vwl
xdjhwxyJ/a/JEF2ISQQYEQIACQUCQ1AArQIbDAAKCRAulvFBs90rLrBkAJ9tScp6
drhhPQJw1AY6GEpSbK0JtACeJuewK8C1wO1l5OYkGzFpb4VgquI=
=twR+
-----END PGP PUBLIC KEY BLOCK-----
"
