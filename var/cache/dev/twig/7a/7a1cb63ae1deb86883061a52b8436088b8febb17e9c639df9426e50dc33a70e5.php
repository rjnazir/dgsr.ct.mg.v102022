<?php

/* AdminBundle:CtBordereau:index.html.twig */
class __TwigTemplate_d1736e421fa7c4d604abf5bd48080a9a4fb7c4169da47b9ebff338c8414ebe43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtBordereau:index.html.twig", 1);
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
        $__internal_cf40693731c46e0040d191c478a3802ade79605d9e5d75b5a192622278fb8af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf40693731c46e0040d191c478a3802ade79605d9e5d75b5a192622278fb8af3->enter($__internal_cf40693731c46e0040d191c478a3802ade79605d9e5d75b5a192622278fb8af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtBordereau:index.html.twig"));

        $__internal_739c7ea04de2e0442f70d93df7ca9262400b5285b60e5355373cebdf171b585d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739c7ea04de2e0442f70d93df7ca9262400b5285b60e5355373cebdf171b585d->enter($__internal_739c7ea04de2e0442f70d93df7ca9262400b5285b60e5355373cebdf171b585d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtBordereau:index.html.twig"));

        // line 5
        $context["menu_bordereau"] = true;
        // line 6
        $context["menu_bordereau_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf40693731c46e0040d191c478a3802ade79605d9e5d75b5a192622278fb8af3->leave($__internal_cf40693731c46e0040d191c478a3802ade79605d9e5d75b5a192622278fb8af3_prof);

        
        $__internal_739c7ea04de2e0442f70d93df7ca9262400b5285b60e5355373cebdf171b585d->leave($__internal_739c7ea04de2e0442f70d93df7ca9262400b5285b60e5355373cebdf171b585d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cd09f2c269a8fc165085f4fd7f7ef53c26fe67a962cf60381328b50759f18d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd09f2c269a8fc165085f4fd7f7ef53c26fe67a962cf60381328b50759f18d4->enter($__internal_9cd09f2c269a8fc165085f4fd7f7ef53c26fe67a962cf60381328b50759f18d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9a3e79d305e97b43068cab42524365264e59ce0cb1e447b27327beb69fc9bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a3e79d305e97b43068cab42524365264e59ce0cb1e447b27327beb69fc9bac->enter($__internal_c9a3e79d305e97b43068cab42524365264e59ce0cb1e447b27327beb69fc9bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des bordereaux ";
        
        $__internal_c9a3e79d305e97b43068cab42524365264e59ce0cb1e447b27327beb69fc9bac->leave($__internal_c9a3e79d305e97b43068cab42524365264e59ce0cb1e447b27327beb69fc9bac_prof);

        
        $__internal_9cd09f2c269a8fc165085f4fd7f7ef53c26fe67a962cf60381328b50759f18d4->leave($__internal_9cd09f2c269a8fc165085f4fd7f7ef53c26fe67a962cf60381328b50759f18d4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cef1a130ebefcde764a1e507f236608dfccc24c1b27b528d1ce8e2acc6bc7457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef1a130ebefcde764a1e507f236608dfccc24c1b27b528d1ce8e2acc6bc7457->enter($__internal_cef1a130ebefcde764a1e507f236608dfccc24c1b27b528d1ce8e2acc6bc7457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcc851afeba75cbfb2efd4303d2e899cdc819a82585aed3e6d98a82e5b151657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc851afeba75cbfb2efd4303d2e899cdc819a82585aed3e6d98a82e5b151657->enter($__internal_dcc851afeba75cbfb2efd4303d2e899cdc819a82585aed3e6d98a82e5b151657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
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
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Ajouter un IT dans le bordereau
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th width=\"1%\"></th>
                                <th width=\"22%\">N° bordereau</th>
                                <th width=\"15%\">Nom centre</th>
                                <th width=\"15%\">Nom IT</th>
                                <th width=\"5%\">Unité</th>
                                <th width=\"10%\">N° IT</th>
                                <th width=\"23%\">Réf. demande</th>
                                <th width=\"7%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["its_in_bl"] ?? $this->getContext($context, "its_in_bl")));
        foreach ($context['_seq'] as $context["_key"] => $context["it_in_bl"]) {
            // line 62
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "blNumero", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["it_in_bl"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["it_in_bl"], "ctImprimeTech", array()), "nomImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["it_in_bl"], "ctImprimeTech", array()), "uteImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "blDebutNumero", array()), "html", null, true);
            echo " ";
            if ($this->getAttribute($context["it_in_bl"], "blFinNumero", array())) {
                echo " à ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "blFinNumero", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "refExpr", array()), "html", null, true);
            echo " du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["it_in_bl"], "dateRefExpr", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-sm btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_edit", array("id" => $this->getAttribute($context["it_in_bl"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-sm btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_delete", array("id" => $this->getAttribute($context["it_in_bl"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it_in_bl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            </tbody>
                        </table>

                        ";
        // line 88
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_dcc851afeba75cbfb2efd4303d2e899cdc819a82585aed3e6d98a82e5b151657->leave($__internal_dcc851afeba75cbfb2efd4303d2e899cdc819a82585aed3e6d98a82e5b151657_prof);

        
        $__internal_cef1a130ebefcde764a1e507f236608dfccc24c1b27b528d1ce8e2acc6bc7457->leave($__internal_cef1a130ebefcde764a1e507f236608dfccc24c1b27b528d1ce8e2acc6bc7457_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91a7e6712dfa3919a4206cd8d67f59ef3129bbc5d66208f59f80f9073bc65261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a7e6712dfa3919a4206cd8d67f59ef3129bbc5d66208f59f80f9073bc65261->enter($__internal_91a7e6712dfa3919a4206cd8d67f59ef3129bbc5d66208f59f80f9073bc65261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1ccef2f1b1939bc414e37f79d466b3abe2ac1b0ae1761a525eca6428302f9332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccef2f1b1939bc414e37f79d466b3abe2ac1b0ae1761a525eca6428302f9332->enter($__internal_1ccef2f1b1939bc414e37f79d466b3abe2ac1b0ae1761a525eca6428302f9332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

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
    </script>
";
        
        $__internal_1ccef2f1b1939bc414e37f79d466b3abe2ac1b0ae1761a525eca6428302f9332->leave($__internal_1ccef2f1b1939bc414e37f79d466b3abe2ac1b0ae1761a525eca6428302f9332_prof);

        
        $__internal_91a7e6712dfa3919a4206cd8d67f59ef3129bbc5d66208f59f80f9073bc65261->leave($__internal_91a7e6712dfa3919a4206cd8d67f59ef3129bbc5d66208f59f80f9073bc65261_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtBordereau:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 102,  267 => 101,  246 => 88,  241 => 84,  229 => 78,  222 => 74,  214 => 71,  204 => 70,  200 => 69,  196 => 68,  192 => 67,  188 => 66,  183 => 64,  179 => 62,  175 => 61,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des bordereaux {% endblock %}

{% set menu_bordereau      = true %}
{% set menu_bordereau_list = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
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
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('bordereau_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Ajouter un IT dans le bordereau
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('bordereau_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th width=\"1%\"></th>
                                <th width=\"22%\">N° bordereau</th>
                                <th width=\"15%\">Nom centre</th>
                                <th width=\"15%\">Nom IT</th>
                                <th width=\"5%\">Unité</th>
                                <th width=\"10%\">N° IT</th>
                                <th width=\"23%\">Réf. demande</th>
                                <th width=\"7%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for it_in_bl in its_in_bl %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ it_in_bl.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ it_in_bl.blNumero }}</td>
                                    <td>{{ it_in_bl.ctCentre.ctrNom }}</td>
                                    <td>{{ it_in_bl.ctImprimeTech.nomImprimeTech }}</td>
                                    <td>{{ it_in_bl.ctImprimeTech.uteImprimeTech }}</td>
                                    <td>{{ it_in_bl.blDebutNumero }} {% if (it_in_bl.blFinNumero) %} à {{ it_in_bl.blFinNumero }} {% endif %}</td>
                                    <td>{{ it_in_bl.refExpr }} du {{ it_in_bl.dateRefExpr|date('d/m/Y') }}</td>
                                    <td>
                                        <a class=\"btn btn-sm btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('bordereau_edit', { 'id': it_in_bl.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-sm btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('bordereau_delete', { 'id': it_in_bl.id }) }}\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

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
    </script>
{% endblock %}
", "AdminBundle:CtBordereau:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtBordereau/index.html.twig");
    }
}
