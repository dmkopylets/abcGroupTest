<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\DB;
use OpenApi\Annotations as OA;

    /**
     * @OA\Info(
     *     title="Laravel Swagger API documentation for test task",
     *     version="1.0.0",
     *     @OA\Contact(
     *         name="Dmytro",
     *         email="dm.kopylets@gmail.com"
     *         )
     * ),
     * @OA\Tag(name="clicks")
    **/
class ApiController extends Controller
{

    use ApiResponse;

    /**
     * @OA\Get(
     *     path="/api/clicks-with-actions",
     *     summary="clicks with actions",
     *     operationId="getClicksListWithActions",
     *     tags={"clicks"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\MediaType(
     *             mediaType="application/json"
     *         )
     *       ),
     *     @OA\Response(
     *         response=403,
     *         description="Forbidden"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="clicks not found",
     *     )
     *  )
     */
    public function clicksWithActions(): \Illuminate\Http\JsonResponse
    {
        $clicksWithActions = DB::table('click')
            ->join('actions', 'click.id', '=', 'actions.click_id')
            ->select('click.*')
            ->distinct()
            ->get();

        if (count($clicksWithActions) < 1) {
            return $this->sendError('no such articles were found', 404, []);
        }
        return $this->sendResponse($clicksWithActions, 'Ok', 200);
    }

    /**
     * @OA\Get(
     *     path="/api/clicks-without-actions",
     *     summary="clicks with actions",
     *     operationId="getClicksListWithoutActions",
     *     tags={"clicks"},
     *     @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\MediaType(
     *              mediaType="application/json"
     *           )
     *       ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *     @OA\Response(
     *          response=404,
     *          description="articles not found",
     *      )
     *  )
     */
    public function clicksWithoutActions(): \Illuminate\Http\JsonResponse
    {
        $clicksWithoutActions = DB::table('click')
            ->leftJoin('actions', 'click.id', '=', 'actions.click_id')
            ->whereNull('actions.click_id')
            ->select('click.*')
            ->distinct()
            ->get();

        if (count($clicksWithoutActions) < 1) {
            return $this->sendError('no such articles were found', 404, []);
        }
        return $this->sendResponse($clicksWithoutActions, 'Ok', 200);
    }
}
