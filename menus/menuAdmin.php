<ul class="sidebar-menu">
                        <li class="active">
                            <a href="formPrincipal.php">
                                <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
                            </a>
                        </li>
                        <!--
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Afiliados</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#" onclick="loadContentP('window_action','afiliados/formAfiliados.php','');">
                                        <i class="fa fa-angle-double-right"></i>    
                                        Registrar
                                    </a>
                                </li>
                                <li><a href="#" onclick="loadContentP('window_action','afiliados/consultarAfiliados.php','');"><i class="fa fa-angle-double-right"></i> Consultar </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Contratos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onclick="loadContentP('window_action','contratos/formContratos.php','');"><i class="fa fa-angle-double-right"></i> Registrar </a></li>
                                <li><a href="#" onclick="loadContentP('window_action','contratos/consultarContratos.php','');"><i class="fa fa-angle-double-right"></i> Consultar </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Pagos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onclick="loadContentP('window_action','pagos/formPagos.php','');"><i class="fa fa-angle-double-right"></i> Registrar </a></li>
                                <li><a href="#" onclick="loadContentP('window_action','pagos/consultarPagos.php','');"><i class="fa fa-angle-double-right"></i> Consultar </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Fallecimientos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onclick="loadContentP('window_action','fallecimientos/formFallecimientos.php','');"><i class="fa fa-angle-double-right"></i> Registrar </a></li>
                                <li><a href="#" onclick="loadContentP('window_action','fallecimientos/consultarFallecimientos.php','');"><i class="fa fa-angle-double-right"></i> Consultar </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Obituarios</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onclick="loadContentP('window_action','obituarios/consultarObituarios.php','');"><i class="fa fa-angle-double-right"></i> Consultar </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Servicios</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onclick="loadContentP('window_action','servicios/formServicios.php','');"><i class="fa fa-angle-double-right"></i> Registrar </a></li>
                                <li><a href="#" onclick="loadContentP('window_action','servicios/consultarServicios.php','');"><i class="fa fa-angle-double-right"></i> Consultar </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Reportes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onclick="loadContentP('window_action','auditoria/tablaAuditoria.php','');"><i class="fa fa-angle-double-right"></i>Auditoría</a></li>
                                <li><a href="#" onclick="loadContentP('window_action','pagos/controlPagos.php','');"><i class="fa fa-angle-double-right"></i> Control de Pagos</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Inventario</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <!--
                                <li><a href=""><i class="fa fa-angle-double-right"></i> Registrar </a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i> Consultar </a></li>
                                -->
                            </ul>
                        </li>
                        
                        <!--
                        <li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                        -->
                    </ul>