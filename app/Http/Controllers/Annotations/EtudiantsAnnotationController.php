<?php

namespace App\Http\Controllers\Annotations ;

/**
 * @OA\Security(
 *     security={
 *         "BearerAuth": {}
 *     }),

 * @OA\SecurityScheme(
 *     securityScheme="BearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"),

 * @OA\Info(
 *     title="Your API Title",
 *     description="Your API Description",
 *     version="1.0.0"),

 * @OA\Consumes({
 *     "multipart/form-data"
 * }),

 *

 * @OA\POST(
 *     path="/api/etudiants/7/restore",
 *     summary="Restauration",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"Etudiants"},
*),


 * @OA\POST(
 *     path="/api/etudiants/8",
 *     summary="Modification Etudiants",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="path", name="nom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="email", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 properties={
 *                 },
 *             ),
 *         ),
 *     ),
 *     tags={"Etudiants"},
*),


 * @OA\DELETE(
 *     path="/api/etudiants/1",
 *     summary="Suppression Etudiants",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="204", description="Deleted successfully"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 * @OA\Response(response="404", description="Not Found"),
 *     @OA\Parameter(in="path", name="name", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"Etudiants"},
*),


 * @OA\POST(
 *     path="/api/etudiants",
 *     summary="ajout d' étudiants",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="path", name="prenom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="nom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="adresse", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="telephone", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="matricule", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="email", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="date_naissance", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="mot_de_passe", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="photo", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 properties={
 *                     @OA\Property(property="photo", type="string", format="binary"),
 *                     @OA\Property(property="nom", type="string"),
 *                     @OA\Property(property="prenom", type="string"),
 *                     @OA\Property(property="email", type="string"),
 *                     @OA\Property(property="telephone", type="string"),
 *                     @OA\Property(property="adresse", type="string"),
 *                     @OA\Property(property="matricule", type="string"),
 *                     @OA\Property(property="date_naissance", type="string"),
 *                     @OA\Property(property="", type="string"),
 *                 },
 *             ),
 *         ),
 *     ),
 *     tags={"Etudiants"},
*),


 * @OA\GET(
 *     path="/api/etudiants/7",
 *     summary="Affichage Etudiants",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"Etudiants"},
*),


*/

 class EtudiantsAnnotationController {}
