<?php

if (!APP_ADMIN) {
	httpError(403, "Not authenticated");
	die();
}

?>