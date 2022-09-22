<?php

/* @Admin/CtImprimeTechUse/index.html.twig */
class __TwigTemplate_e7bfb5810bfc489c2010d2a72b206d78bc71bf0d65245c31f657908f64ffef4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTechUse/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu_imprime_tech_use"] = true;
        // line 6
        $context["menu_imprime_tech_use_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisations des I.T. ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-warning\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 30
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Feuille d'utilisation des I.T. </h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_fitu_date\">Sélectionner la date</label>
                                    <input required id=\"ct_fitu_date\" name=\"ct_fitu_date\" class=\"form-control datepicker\"
                                           value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\" />
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"";
        // line 51
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_APPROVISIONNEMENT")))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_fitu_centre\">Sélectionner le centre</label>
                                        <select id=\"ct_fitu_centre\" name=\"ct_fitu_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 61
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 63
                echo "                                                    ";
                // line 64
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                echo "\">
                                                            ";
                // line 65
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
                echo "
                                                        </option>
                                                    ";
                // line 68
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\" id=\"btn-generate-utilisation-it\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-3\">
                                    <span class=\"pull-left\" id=\"link-download-utilisation-it\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

";
        // line 152
        echo "
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Situation de stock mensuelle I.T. </h3>
                </div>
                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Mois -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_mois_stock\">Sélectionner le mois à traitement</label>
                                    <input required id=\"ct_mois_stock\" name=\"ct_mois_stock\" class=\"form-control monthpicker\"
                                            type=\"month\" />
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"";
        // line 172
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_APPROVISIONNEMENT")))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_centre_id_stock\">Sélectionner le centre</label>
                                        <select id=\"ct_centre_id_stock\" name=\"ct_centre_id_stock\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 182
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 184
                echo "                                                    ";
                // line 185
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                echo "\">
                                                            ";
                // line 186
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
                echo "
                                                        </option>
                                                    ";
                // line 189
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Validation et téléchargment -->
                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\" id=\"btn-generate-new-stock-it\" disabled >
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-new-stock-it\"></span>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            ";
        // line 220
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Liste d'utilisation des imprimés techniques</h3>
                </div>

                <form action=\"#\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"list-count\">
                            <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                        </div>
                        <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>N° controle / N° d'enregistrement</th>
                                <th>N° IT</th>
                                <th>Type IT</th>
                                <th>Motif utilisation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["itu_listes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["itu_liste"]) {
            // line 248
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "ctControle", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "ituNumero", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["itu_liste"], "ctImprimeTech", array()), "nomImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "ituMotifUsed", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_edit", array("id" => $this->getAttribute($context["itu_liste"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itu_liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    // line 273
    public function block_javascripts($context, array $blocks = array())
    {
        // line 274
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('#liste-imprime-tech-bl').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });

        \$(document).ready(function() {
            \$('#ct_mois_stock').on('select change', function() {
                if(\$(this).val() != '') {
                    \$('#btn-generate-new-stock-it').prop('disabled', false);
                } else {
                    \$('#btn-generate-new-stock-it').prop('disabled', true);
                }
            });
        });

        var _generate_used_it_ajax_uri = \"";
        // line 313
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_generate_used_ajax");
        echo "\";
        var _generate_stock_it_ajax_uri = \"";
        // line 314
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_stock_generate_ajax");
        echo "\";
        var _generate_new_stok_it_ajax_uri = \"";
        // line 315
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_new_stock_generate_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/index.imprimes.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTechUse/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 317,  437 => 315,  433 => 314,  429 => 313,  391 => 278,  383 => 274,  380 => 273,  369 => 264,  357 => 258,  351 => 255,  347 => 254,  343 => 253,  339 => 252,  334 => 250,  330 => 248,  326 => 247,  297 => 220,  274 => 192,  267 => 190,  261 => 189,  256 => 186,  251 => 185,  249 => 184,  245 => 183,  240 => 182,  236 => 181,  222 => 172,  200 => 152,  177 => 71,  170 => 69,  164 => 68,  159 => 65,  154 => 64,  152 => 63,  148 => 62,  143 => 61,  139 => 60,  125 => 51,  117 => 46,  99 => 30,  96 => 24,  87 => 21,  84 => 20,  79 => 19,  70 => 16,  67 => 15,  62 => 14,  53 => 11,  50 => 10,  45 => 9,  42 => 8,  35 => 3,  31 => 1,  29 => 6,  27 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/CtImprimeTechUse/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\index.html.twig");
    }
}
