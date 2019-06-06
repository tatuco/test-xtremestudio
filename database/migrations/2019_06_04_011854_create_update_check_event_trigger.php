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
        DB::connection()
            ->getPdo()
            ->exec("
               
                CREATE TRIGGER check_update_event AFTER UPDATE ON `sub_events`
                    FOR EACH ROW BEGIN
                        DECLARE eventos_completados INT;
                        DECLARE cantidad_eventos INT;
                        DECLARE fecha DATE;
                        DECLARE hoy DATE;
                        SET cantidad_eventos = (SELECT COUNT(*) FROM sub_events WHERE event_id = NEW.event_id);
                        SET eventos_completados = (SELECT COUNT(*) FROM sub_events WHERE event_id = NEW.event_id AND `check` = 1);
                        IF (cantidad_eventos = eventos_completados)  THEN
                            SET fecha = (SELECT date FROM events WHERE id = NEW.event_id);
                            SET hoy = (SELECT CURDATE());
                            IF (hoy <= fecha) THEN
                                UPDATE events SET status_id = 1,`check` = 1 WHERE id = NEW.event_id;
                            ELSE
                                UPDATE events SET status_id = 2, `check` = 1 WHERE id = NEW.event_id;
                            END IF;
                        END IF;
                    END
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
