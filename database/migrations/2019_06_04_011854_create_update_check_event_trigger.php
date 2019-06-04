<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdateCheckEventTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->getPdo()->exec("
                DELIMITER |
                CREATE TRIGGER check_update_event AFTER UPDATE ON sub_events
                    FOR EACH ROW BEGIN
                        DECLARE cantidad_eventos INT;
                        DECLARE eventos_completados INT;
                        SET cantidad_eventos = (SELECT COUNT(*) FROM sub_events WHERE event_id = NEW.event_id);
                        SET eventos_completados = (SELECT COUNT(*) FROM sub_events WHERE event_id = NEW.event_id AND `check` = 1);
                        IF (cantidad_eventos = eventos_completados)  THEN
                            UPDATE events SET `check` = 1 WHERE id = NEW.event_id;
                        END IF;
                    END
                |
                DELIMITER;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection()->getPdo()->exec("drop trigger check_update_event;");
    }
}
