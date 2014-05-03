/**
 * Created by Ruslan on 03.05.14.
 */
window.onload = (function() {   // когда загрузится вся страница
    VK.init(function() {    // инициализируем Vk API

        // выполняем запрос получения информации о участниках группы vk.com/club17157755
        VK.api('groups.getMembers',{gid: '17157755'},function(data) {
            if (data.response) {
                var memebers_n = data.response.count; // сохраняем количество участников в переменную
                document.getElementById('gr_members_n').innerHTML = 'Количество участников группы: ' + memebers_n; // выводим результат в <div id="gr_members_n"></div>
            }
        });

    });
});