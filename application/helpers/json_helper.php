<?php

function json_encode_response($response)
{

	header("Content-type: application/json");

	return json_encode($response);
}

