<nav :class="{'flex': open, 'hidden': !open}" class="w-full flex-col flex-grow pb-4 lg:pb-0 hidden lg:flex lg:justify-center lg:flex-row z-50">
        <?php
        $sql = " select *
                  from {$g5['menu_table']}
                  where me_use = '1'
                  and length(me_code) = '2'
                  order by me_order, me_id ";
        $result = sql_query($sql, false);
        $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
        $menu_datas = array();

        for ($i = 0; $row = sql_fetch_array($result); $i++) {
          $menu_datas[$i] = $row;

          $sql2 = " select *
                    from {$g5['menu_table']}
                    where me_use = '1'
                    and length(me_code) = '4'
                    and substring(me_code, 1, 2) = '{$row['me_code']}'
                    order by me_order, me_id ";
          $result2 = sql_query($sql2);
          for ($k = 0; $row2 = sql_fetch_array($result2); $k++) {
            $menu_datas[$i]['sub'][$k] = $row2;
          }
        }

        $i = 0;
        foreach ($menu_datas as $row) {
          if (empty($row)) continue;

          if (empty($menu_datas[$i]['sub']['0'])) {
        ?>
            <a href="<?php echo $row['me_link']; ?>" class="flex items-center px-3 py-1 mt-2 rounded-lg lg:mt-0 focus:outline-none focus:shadow-outline"><?php echo $row['me_name'] ?>
            </a>
            <?php
          }

          $k = 0;
          foreach ((array) $row['sub'] as $row2) {

            if (empty($row2)) continue;

            if ($k == 0) { ?>
              <style>
                .but{
                  width: 170px; 
                  margin-right:10px;
                }
                .but:hover{
                  background: black; 
                  color: white;
                }
                .ddnav{
                  width: 210px; 
                  text-align:center;
                }
                .ddnava{
                  color: black;
                  text-decoration: none;
                }
                .ddnava:hover{
                  background: black;
                  color: white;
                }
              </style>
  
              <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <!-- ////////////////////////////////////////////////////// -->
                <button @click="open = !open" class="flex flex-row items-center w-full px-3 py-1 mt-2 text-center rounded-lg lg:w-auto lg:mt-0 focus:outline-none focus:shadow-outline but">
                  <span class="" style="padding-left: 20px;"><?php echo $row['me_name'] ?></span>
                  <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform lg:-mt-1">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
                    </path>
                  </svg>
                </button>
                
                <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg lg:w-48">
                <!-- ////////////////////////////////////////////////////// -->
                  <div class="dropdownItem px-2 py-2 mb-0.5 rounded-md shadow relative z-50 ddnav">
                  <?php } ?>

                  <a href="<?php echo $row2['me_link']; ?>" class="block px-4 py-1 rounded-lg hover:text-black focus:text-blxk focus:outline-none focus:shadow-outline ddnava"><?php echo $row2['me_name'] ?>
                  </a>
                <?php
                $k++;
              }   //end foreach $row2

              if ($k > 0)
                echo '</div></div></div>' . PHP_EOL;
              $i++;
            }   //end foreach $row
            if ($i == 0) {  ?>
                <div class="text-center">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?>
                </div>
              <?php } //else { ?>
                <!-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
                  <button @click="open = !open" class="flex flex-row items-center w-full px-3 py-1 mt-2 text-left rounded-lg lg:w-auto lg:inline lg:mt-0 hover:text-indigo-900 focus:text-indigo-900 hover:bg-indigo-200 focus:bg-indigo-200 focus:outline-none focus:shadow-outline text-base">
                    <span>기본 메뉴</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 transition-transform duration-200 transform lg:-mt-1">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                  </button>
                  <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg lg:w-48">
                    <div class="dropdownItem px-2 py-2 rounded-md shadow relative z-50">
                      <a class="block px-4 py-1 mb-0.5 rounded-lg hover:text-black focus:text-blxk hover:bg-indigo-200 focus:bg-indigo-200 focus:outline-none focus:shadow-outline" href="</?php echo G5_BBS_URL ?>/faq.php" target="_</?php echo $row2['me_target']; ?>">FAQ</a>
                      <a class="block px-4 py-1 mb-0.5 rounded-lg hover:text-black focus:text-blxk hover:bg-indigo-200 focus:bg-indigo-200 focus:outline-none focus:shadow-outline" href="</?php echo G5_BBS_URL ?>/qalist.php" target="_</?php echo $row2['me_target']; ?>">Q&A</a>
                      <a class="block px-4 py-1 mb-0.5 rounded-lg hover:text-black focus:text-blxk hover:bg-indigo-200 focus:bg-indigo-200 focus:outline-none focus:shadow-outline" href="</?php echo G5_BBS_URL ?>/new.php" target="_</?php echo $row2['me_target']; ?>">새글</a>
                      <a class="block px-4 py-1 mb-0.5rounded-lg hover:text-black focus:text-blxk hover:bg-indigo-200 focus:bg-indigo-200 focus:outline-none focus:shadow-outline" href="</?php echo G5_BBS_URL ?>/current_connect.php" target="_</?php echo $row2['me_target']; ?>">현재접속자 수</?php echo connect('theme/basic'); ?></a>
                    </div>
                  </div>
                </div> 
               </?php } ?> -->
              <!-- <div id="theme-toggle" class="px-2 text-xl self-center cursor-pointer bi"></div> -->
      </nav>