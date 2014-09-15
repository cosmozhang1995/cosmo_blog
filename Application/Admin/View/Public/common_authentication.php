<?php

if (!isAdmin()) {
	httpError(403, "Not authenticated");
	die();
}

?>