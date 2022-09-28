<?php

/* AdminBundle:CtReception:view.html.twig */
class __TwigTemplate_9fc95e8d9cb36dbbccb8a3113d4493ea2bee3df8dbbaa07c3d8fcbacd7f86982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtReception:view.html.twig", 1);
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
        $__internal_fdadbe301542c9dc4e5d3e6538fbe34267c3bccd702ddcedc72f671bc9357f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdadbe301542c9dc4e5d3e6538fbe34267c3bccd702ddcedc72f671bc9357f04->enter($__internal_fdadbe301542c9dc4e5d3e6538fbe34267c3bccd702ddcedc72f671bc9357f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:view.html.twig"));

        $__internal_441f23133eeb570b868dc7c48e2dc5abcd98875896a1328db70236fa96caf044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441f23133eeb570b868dc7c48e2dc5abcd98875896a1328db70236fa96caf044->enter($__internal_441f23133eeb570b868dc7c48e2dc5abcd98875896a1328db70236fa96caf044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:view.html.twig"));

        // line 5
        $context["menu_reception"] = true;
        // line 6
        $context["menu_reception_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdadbe301542c9dc4e5d3e6538fbe34267c3bccd702ddcedc72f671bc9357f04->leave($__internal_fdadbe301542c9dc4e5d3e6538fbe34267c3bccd702ddcedc72f671bc9357f04_prof);

        
        $__internal_441f23133eeb570b868dc7c48e2dc5abcd98875896a1328db70236fa96caf044->leave($__internal_441f23133eeb570b868dc7c48e2dc5abcd98875896a1328db70236fa96caf044_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_831e80d696582b69b7c8a75e8b7efefed1bceb5aa04cb5d26b319965f6532fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831e80d696582b69b7c8a75e8b7efefed1bceb5aa04cb5d26b319965f6532fa2->enter($__internal_831e80d696582b69b7c8a75e8b7efefed1bceb5aa04cb5d26b319965f6532fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9745531c461753b9a9031d6069bc8cf97f750a984c573a14db5c6ba44f2dc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9745531c461753b9a9031d6069bc8cf97f750a984c573a14db5c6ba44f2dc2c->enter($__internal_c9745531c461753b9a9031d6069bc8cf97f750a984c573a14db5c6ba44f2dc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Detail Réception ";
        
        $__internal_c9745531c461753b9a9031d6069bc8cf97f750a984c573a14db5c6ba44f2dc2c->leave($__internal_c9745531c461753b9a9031d6069bc8cf97f750a984c573a14db5c6ba44f2dc2c_prof);

        
        $__internal_831e80d696582b69b7c8a75e8b7efefed1bceb5aa04cb5d26b319965f6532fa2->leave($__internal_831e80d696582b69b7c8a75e8b7efefed1bceb5aa04cb5d26b319965f6532fa2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c45526d3e8bf00b5fedf4178109824b80ec8348000e07507d016e1c24340c0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45526d3e8bf00b5fedf4178109824b80ec8348000e07507d016e1c24340c0cd->enter($__internal_c45526d3e8bf00b5fedf4178109824b80ec8348000e07507d016e1c24340c0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a44d8800150515441d76f65b9d3e6de818695d154f8b46d5cd25d84dc5d76d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44d8800150515441d76f65b9d3e6de818695d154f8b46d5cd25d84dc5d76d58->enter($__internal_a44d8800150515441d76f65b9d3e6de818695d154f8b46d5cd25d84dc5d76d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <span class=\"title-count-text\"> RECEPTION </span>
                    </div>
                </div>
                <div class=\"box-body\">
                    <div class=\"table-responsive panel\">
                        <table class=\"table table-striped  table-reception\">
                            <tbody>

                            <tr>
                                <td class=\"text-success\"> Type</td>
                                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctTypeReception", array()), "tprcpLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Centre</td>
                                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctCentre", array()), "ctrNom", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro Serie</td>
                                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcNumSerie", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro moteur</td>
                                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcNumMoteur", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Immatriculation</td>
                                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "rcpImmatriculation", array()), "html", null, true);
        echo "</td>
                            </tr>

                            <tr>
                                <td class=\"text-success\"> Genre</td>
                                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "ctGenre", array()), "grLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Marque</td>
                                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "ctMarque", array()), "mrqLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Cylindre</td>
                                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcCylindre", array()), "html", null, true);
        echo " cm3</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Puissance</td>
                                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcPuissance", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Charge Utile</td>
                                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcChargeUtile", array()), "html", null, true);
        echo " Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Poids Vide</td>
                                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcPoidsVide", array()), "html", null, true);
        echo " Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> PTAC</td>
                                <td>";
        // line 86
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcPoidsVide", array()) + $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcChargeUtile", array())), "html", null, true);
        echo " Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Source</td>
                                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctSourceEnergie", array()), "sreLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Carosserie</td>
                                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctCarosserie", array()), "crsLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Motif</td>
                                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctMotif", array()), "mtfLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"box-footer\">
                    <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv", array("id" => $this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-primary\" target=\"_blank\" >
                        Generer PV
                    </a>
                    <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_index");
        echo "\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_a44d8800150515441d76f65b9d3e6de818695d154f8b46d5cd25d84dc5d76d58->leave($__internal_a44d8800150515441d76f65b9d3e6de818695d154f8b46d5cd25d84dc5d76d58_prof);

        
        $__internal_c45526d3e8bf00b5fedf4178109824b80ec8348000e07507d016e1c24340c0cd->leave($__internal_c45526d3e8bf00b5fedf4178109824b80ec8348000e07507d016e1c24340c0cd_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bee7e15bfaf05a85caff8a7cbb8228c1012f39118bfa289aa561961cc0625e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee7e15bfaf05a85caff8a7cbb8228c1012f39118bfa289aa561961cc0625e8a->enter($__internal_bee7e15bfaf05a85caff8a7cbb8228c1012f39118bfa289aa561961cc0625e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b9881a2d1d92f841158e2a5da91f2680d27b9c06d730a73160d74f7e9d0ae072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9881a2d1d92f841158e2a5da91f2680d27b9c06d730a73160d74f7e9d0ae072->enter($__internal_b9881a2d1d92f841158e2a5da91f2680d27b9c06d730a73160d74f7e9d0ae072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-reception').DataTable(
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
                        \"sEmptyTable\": \"Aucune reception trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
    <script>
        var _generate_pv_ajax_uri = \"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv_ajax");
        echo "\";
    </script>
";
        
        $__internal_b9881a2d1d92f841158e2a5da91f2680d27b9c06d730a73160d74f7e9d0ae072->leave($__internal_b9881a2d1d92f841158e2a5da91f2680d27b9c06d730a73160d74f7e9d0ae072_prof);

        
        $__internal_bee7e15bfaf05a85caff8a7cbb8228c1012f39118bfa289aa561961cc0625e8a->leave($__internal_bee7e15bfaf05a85caff8a7cbb8228c1012f39118bfa289aa561961cc0625e8a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtReception:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 149,  294 => 122,  285 => 121,  265 => 110,  258 => 106,  247 => 98,  240 => 94,  233 => 90,  226 => 86,  219 => 82,  212 => 78,  205 => 74,  198 => 70,  191 => 66,  184 => 62,  176 => 57,  169 => 53,  162 => 49,  155 => 45,  148 => 41,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Detail Réception {% endblock %}

{% set menu_reception      = true %}
{% set menu_reception_list = true %}

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
                        <span class=\"title-count-text\"> RECEPTION </span>
                    </div>
                </div>
                <div class=\"box-body\">
                    <div class=\"table-responsive panel\">
                        <table class=\"table table-striped  table-reception\">
                            <tbody>

                            <tr>
                                <td class=\"text-success\"> Type</td>
                                <td>{{ reception.ctTypeReception.tprcpLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Centre</td>
                                <td>{{ reception.ctCentre.ctrNom }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro Serie</td>
                                <td>{{ reception.ctVehicule.vhcNumSerie }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro moteur</td>
                                <td>{{ reception.ctVehicule.vhcNumMoteur }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Immatriculation</td>
                                <td>{{ reception.rcpImmatriculation }}</td>
                            </tr>

                            <tr>
                                <td class=\"text-success\"> Genre</td>
                                <td>{{ reception.ctVehicule.ctGenre.grLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Marque</td>
                                <td>{{ reception.ctVehicule.ctMarque.mrqLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Cylindre</td>
                                <td>{{ reception.ctVehicule.vhcCylindre }} cm3</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Puissance</td>
                                <td>{{ reception.ctVehicule.vhcPuissance }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Charge Utile</td>
                                <td>{{ reception.ctVehicule.vhcChargeUtile }} Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Poids Vide</td>
                                <td>{{ reception.ctVehicule.vhcPoidsVide }} Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> PTAC</td>
                                <td>{{ reception.ctVehicule.vhcPoidsVide + reception.ctVehicule.vhcChargeUtile }} Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Source</td>
                                <td>{{ reception.ctSourceEnergie.sreLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Carosserie</td>
                                <td>{{ reception.ctCarosserie.crsLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Motif</td>
                                <td>{{ reception.ctMotif.mtfLibelle }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"box-footer\">
                    <a href=\"{{ path('reception_generer_pv', { 'id': reception.id }) }}\"
                       class=\"btn btn-primary\" target=\"_blank\" >
                        Generer PV
                    </a>
                    <a href=\"{{ path('reception_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>

            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-reception').DataTable(
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
                        \"sEmptyTable\": \"Aucune reception trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
    <script>
        var _generate_pv_ajax_uri = \"{{ path('reception_generer_pv_ajax') }}\";
    </script>
{% endblock %}
", "AdminBundle:CtReception:view.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtReception/view.html.twig");
    }
}
