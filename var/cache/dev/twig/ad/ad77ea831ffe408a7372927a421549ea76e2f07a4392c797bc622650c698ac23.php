<?php

/* @Admin/CtImprimeTechUse/index.html.twig */
class __TwigTemplate_e2a48626b8e8e750cab7c3926ba63ca6682c6dc5543d6acf377e5d13d988d3bf extends Twig_Template
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
        $__internal_0c5b5f2fd790c46363fa11909188255e40bf41bb6c5451c066ddeb1db18d2ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5b5f2fd790c46363fa11909188255e40bf41bb6c5451c066ddeb1db18d2ebb->enter($__internal_0c5b5f2fd790c46363fa11909188255e40bf41bb6c5451c066ddeb1db18d2ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/index.html.twig"));

        $__internal_d41761deba81c9c09c4599d948592a291459a88810c330ee9a62b831d42f9fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41761deba81c9c09c4599d948592a291459a88810c330ee9a62b831d42f9fd0->enter($__internal_d41761deba81c9c09c4599d948592a291459a88810c330ee9a62b831d42f9fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/index.html.twig"));

        // line 5
        $context["menu_imprime_tech_use"] = true;
        // line 6
        $context["menu_imprime_tech_use_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c5b5f2fd790c46363fa11909188255e40bf41bb6c5451c066ddeb1db18d2ebb->leave($__internal_0c5b5f2fd790c46363fa11909188255e40bf41bb6c5451c066ddeb1db18d2ebb_prof);

        
        $__internal_d41761deba81c9c09c4599d948592a291459a88810c330ee9a62b831d42f9fd0->leave($__internal_d41761deba81c9c09c4599d948592a291459a88810c330ee9a62b831d42f9fd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57d7d2734dd774085796a04b4c346c9bdc0f2a01ae7979eaeba5cc6ff2cfe897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d7d2734dd774085796a04b4c346c9bdc0f2a01ae7979eaeba5cc6ff2cfe897->enter($__internal_57d7d2734dd774085796a04b4c346c9bdc0f2a01ae7979eaeba5cc6ff2cfe897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8871e6ee06cc2fe006a1a5899472f2c59a2a882ea71c67590f5d41385c3935cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8871e6ee06cc2fe006a1a5899472f2c59a2a882ea71c67590f5d41385c3935cc->enter($__internal_8871e6ee06cc2fe006a1a5899472f2c59a2a882ea71c67590f5d41385c3935cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisations des I.T. ";
        
        $__internal_8871e6ee06cc2fe006a1a5899472f2c59a2a882ea71c67590f5d41385c3935cc->leave($__internal_8871e6ee06cc2fe006a1a5899472f2c59a2a882ea71c67590f5d41385c3935cc_prof);

        
        $__internal_57d7d2734dd774085796a04b4c346c9bdc0f2a01ae7979eaeba5cc6ff2cfe897->leave($__internal_57d7d2734dd774085796a04b4c346c9bdc0f2a01ae7979eaeba5cc6ff2cfe897_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_adb4d9a351cfbfd5853e066d01e7656c73ffe59aeff6b806aa0e3880624c958d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb4d9a351cfbfd5853e066d01e7656c73ffe59aeff6b806aa0e3880624c958d->enter($__internal_adb4d9a351cfbfd5853e066d01e7656c73ffe59aeff6b806aa0e3880624c958d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e73f4232fd91a64f728843bcbc95a2544ba423d396775ac14f2c913771b8e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e73f4232fd91a64f728843bcbc95a2544ba423d396775ac14f2c913771b8e5b->enter($__internal_5e73f4232fd91a64f728843bcbc95a2544ba423d396775ac14f2c913771b8e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 26
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    <div class=\"row\">
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
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\" />
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"";
        // line 52
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_APPROVISIONNEMENT")))) {
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
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 62
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 64
                echo "                                                    ";
                // line 65
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                echo "\">
                                                            ";
                // line 66
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
                echo "
                                                        </option>
                                                    ";
                // line 69
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-utilisation-it\"></span>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"box box-warning\">

                                        <div class=\"col-md-6\">
                                            <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_search");
        echo "\"
                                                class=\"btn btn-default pull-left btn-mini-rectif\" >
                                                Retour à la rechercher
                                            </a>
                                        </div>
                                        
                                        <div class=\"col-md-6\">
                                            <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_new");
        echo "\"
                                                class=\"btn btn-light pull-left btn-mini-rectif\" >
                                                Retour à l'ajout multiple
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        
";
        // line 175
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
        // line 195
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_APPROVISIONNEMENT")))) {
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
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 205
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 207
                echo "                                                    ";
                // line 208
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                echo "\">
                                                            ";
                // line 209
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
                echo "
                                                        </option>
                                                    ";
                // line 212
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
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
        // line 245
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
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["itu_listes"] ?? $this->getContext($context, "itu_listes")));
        foreach ($context['_seq'] as $context["_key"] => $context["itu_liste"]) {
            // line 273
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "ctControle", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "ituNumero", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["itu_liste"], "ctImprimeTech", array()), "nomImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "ituMotifUsed", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 283
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
        // line 289
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_5e73f4232fd91a64f728843bcbc95a2544ba423d396775ac14f2c913771b8e5b->leave($__internal_5e73f4232fd91a64f728843bcbc95a2544ba423d396775ac14f2c913771b8e5b_prof);

        
        $__internal_adb4d9a351cfbfd5853e066d01e7656c73ffe59aeff6b806aa0e3880624c958d->leave($__internal_adb4d9a351cfbfd5853e066d01e7656c73ffe59aeff6b806aa0e3880624c958d_prof);

    }

    // line 299
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29bdd02b8ff9ca65dfa1498566b7a14e3ddca06751e68e2612bf5cf53c18958b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29bdd02b8ff9ca65dfa1498566b7a14e3ddca06751e68e2612bf5cf53c18958b->enter($__internal_29bdd02b8ff9ca65dfa1498566b7a14e3ddca06751e68e2612bf5cf53c18958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7cd8cbf0550b153f33d3f6078c6827ee3962e875638bd5a8571ef9761be5c4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd8cbf0550b153f33d3f6078c6827ee3962e875638bd5a8571ef9761be5c4de->enter($__internal_7cd8cbf0550b153f33d3f6078c6827ee3962e875638bd5a8571ef9761be5c4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 300
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 304
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
        // line 339
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_generate_used_ajax");
        echo "\";
        var _generate_stock_it_ajax_uri = \"";
        // line 340
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_stock_generate_ajax");
        echo "\";
        var _generate_new_stok_it_ajax_uri = \"";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_new_stock_generate_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/index.imprimes.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7cd8cbf0550b153f33d3f6078c6827ee3962e875638bd5a8571ef9761be5c4de->leave($__internal_7cd8cbf0550b153f33d3f6078c6827ee3962e875638bd5a8571ef9761be5c4de_prof);

        
        $__internal_29bdd02b8ff9ca65dfa1498566b7a14e3ddca06751e68e2612bf5cf53c18958b->leave($__internal_29bdd02b8ff9ca65dfa1498566b7a14e3ddca06751e68e2612bf5cf53c18958b_prof);

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
        return array (  534 => 343,  529 => 341,  525 => 340,  521 => 339,  483 => 304,  475 => 300,  466 => 299,  448 => 289,  436 => 283,  430 => 280,  426 => 279,  422 => 278,  418 => 277,  413 => 275,  409 => 273,  405 => 272,  376 => 245,  351 => 215,  344 => 213,  338 => 212,  333 => 209,  328 => 208,  326 => 207,  322 => 206,  317 => 205,  313 => 204,  299 => 195,  277 => 175,  259 => 100,  249 => 93,  226 => 72,  219 => 70,  213 => 69,  208 => 66,  203 => 65,  201 => 64,  197 => 63,  192 => 62,  188 => 61,  174 => 52,  166 => 47,  147 => 30,  138 => 27,  133 => 26,  129 => 25,  126 => 24,  117 => 21,  114 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Liste des utilisations des I.T. {% endblock %}

{% set menu_imprime_tech_use      = true %}
{% set menu_imprime_tech_use_list = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('warning') %}
        <div class=\"callout callout-warning\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}

    <div class=\"row\">
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
                                           value=\"{{ \"now\"|date(\"d/m/Y\") }}\" />
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') and app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_APPROVISIONNEMENT') %}hidden{% endif %}\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_fitu_centre\">Sélectionner le centre</label>
                                        <select id=\"ct_fitu_centre\" name=\"ct_fitu_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            {% for province in provinces %}
                                            <optgroup label=\"{{ province.prvNom }}\">
                                                {% for centre in centres %}
                                                    {# {% if province.id == centre.ctProvince.id %} #}
                                                        <option value=\"{{ centre.id }}\">
                                                            {{ centre.ctrNom|upper }}
                                                        </option>
                                                    {# {% endif %} #}
                                                {% endfor %}
                                            </optgroup>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\" id=\"btn-generate-utilisation-it\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-utilisation-it\"></span>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"box box-warning\">

                                        <div class=\"col-md-6\">
                                            <a href=\"{{ path('imprime_tech_use_search') }}\"
                                                class=\"btn btn-default pull-left btn-mini-rectif\" >
                                                Retour à la rechercher
                                            </a>
                                        </div>
                                        
                                        <div class=\"col-md-6\">
                                            <a href=\"{{ path('imprime_tech_use_new') }}\"
                                                class=\"btn btn-light pull-left btn-mini-rectif\" >
                                                Retour à l'ajout multiple
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        
{#         <div class=\"col-md-4\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Situation de stock des I.T.</h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_situ_date\">Sélectionner la date début traitement</label>
                                    <input required id=\"ct_situ_date\" name=\"ct_situ_date\" class=\"form-control datepicker\"
                                           value=\"{{ \"now\"|date(\"d/m/Y\") }}\" />
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') and app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_APPROVISIONNEMENT') %}hidden{% endif %}\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_situ_centre\">Sélectionner le centre</label>
                                        <select id=\"ct_situ_centre\" name=\"ct_situ_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            {% for province in provinces %}
                                            <optgroup label=\"{{ province.prvNom }}\">
                                                {% for centre in centres %}
                                                    {% if province.id == centre.ctProvince.id %}
                                                        <option value=\"{{ centre.id }}\">
                                                            {{ centre.ctrNom|upper }}
                                                        </option>
                                                    {% endif %}
                                                {% endfor %}
                                            </optgroup>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\" id=\"btn-generate-stock-it\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-stock-it\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> #}

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
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') and app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_APPROVISIONNEMENT') %}hidden{% endif %}\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_centre_id_stock\">Sélectionner le centre</label>
                                        <select id=\"ct_centre_id_stock\" name=\"ct_centre_id_stock\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            {% for province in provinces %}
                                            <optgroup label=\"{{ province.prvNom }}\">
                                                {% for centre in centres %}
                                                    {# {% if province.id == centre.ctProvince.id %} #}
                                                        <option value=\"{{ centre.id }}\">
                                                            {{ centre.ctrNom|upper }}
                                                        </option>
                                                    {# {% endif %} #}
                                                {% endfor %}
                                            </optgroup>
                                            {% endfor %}
                                        </select>
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
            {# <div class=\"box box-danger kl-bloc-visite\">
                <div class=\"box-body bg-danger table-responsive\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\">Module en cours de maintenance</span>
                    </div>
                </div>
            </div> #}
        </div>
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
                            {% for itu_liste in itu_listes %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ itu_liste.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ itu_liste.ctControle }}</td>
                                    <td>{{ itu_liste.ituNumero }}</td>
                                    <td>{{ itu_liste.ctImprimeTech.nomImprimeTech }}</td>
                                    <td>{{ itu_liste.ituMotifUsed }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('imprime_tech_use_edit', { 'id': itu_liste.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
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

        var _generate_used_it_ajax_uri = \"{{ path('imprimes_tech_generate_used_ajax') }}\";
        var _generate_stock_it_ajax_uri = \"{{ path('imprimes_tech_stock_generate_ajax') }}\";
        var _generate_new_stok_it_ajax_uri = \"{{ path('imprimes_tech_new_stock_generate_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/index.imprimes.js') }}\"></script>
{% endblock %}
", "@Admin/CtImprimeTechUse/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\index.html.twig");
    }
}
