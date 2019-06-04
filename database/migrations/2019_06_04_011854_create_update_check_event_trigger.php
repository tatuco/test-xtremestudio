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
                        cantidad_eventos = (SELECT COUNT(*) FROM sub_events WHERE event_id = NEW.event_id)
                        enventos_completados = (SELECT COUNT(*) FROM sub_events WHERE event_id = NEW.event_id WHERE `check` = true)
                    END
                |DELIMITER;
        ");

        /**
         * DELIMITER |

        CREATE TRIGGER testref BEFORE INSERT ON test1
        FOR EACH ROW BEGIN
        INSERT INTO test2 SET a2 = NEW.a1;
        DELETE FROM test3 WHERE a3 = NEW.a1;
        UPDATE test4 SET b4 = b4 + 1 WHERE a4 = NEW.a1;
        END
        |

        DELIMITER ;
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('update_check_event_trigger');
    }
}
