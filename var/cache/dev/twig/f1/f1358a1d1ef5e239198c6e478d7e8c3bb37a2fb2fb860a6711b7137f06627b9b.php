<?php

/* @Admin/CtZoneDeserte/index.html.twig */
class __TwigTemplate_28e290b9c412e8ee829343793b00b4a7eeb98cdb29a66e206f906fac122d5f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtZoneDeserte/index.html.twig", 1);
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
        $__internal_829387f61e8729f6dd833bde528d4f51661808aa2d1baadb8ea758d672b51cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829387f61e8729f6dd833bde528d4f51661808aa2d1baadb8ea758d672b51cb5->enter($__internal_829387f61e8729f6dd833bde528d4f51661808aa2d1baadb8ea758d672b51cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/index.html.twig"));

        $__internal_bed1a134069bd8b2bdcc865f273ba1e03ab65e0432ae8890b7874e89ea4d5c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed1a134069bd8b2bdcc865f273ba1e03ab65e0432ae8890b7874e89ea4d5c97->enter($__internal_bed1a134069bd8b2bdcc865f273ba1e03ab65e0432ae8890b7874e89ea4d5c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/index.html.twig"));

        // line 5
        $context["menu_zone_deserte"] = true;
        // line 6
        $context["menu_zone_deserte_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_829387f61e8729f6dd833bde528d4f51661808aa2d1baadb8ea758d672b51cb5->leave($__internal_829387f61e8729f6dd833bde528d4f51661808aa2d1baadb8ea758d672b51cb5_prof);

        
        $__internal_bed1a134069bd8b2bdcc865f273ba1e03ab65e0432ae8890b7874e89ea4d5c97->leave($__internal_bed1a134069bd8b2bdcc865f273ba1e03ab65e0432ae8890b7874e89ea4d5c97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53a7cdceeb9085c0e0c6ca0ca9ec2aa5d83d2c77e1c3568df416894a4371981e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a7cdceeb9085c0e0c6ca0ca9ec2aa5d83d2c77e1c3568df416894a4371981e->enter($__internal_53a7cdceeb9085c0e0c6ca0ca9ec2aa5d83d2c77e1c3568df416894a4371981e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90981d59a25d2ff12b4d22130c7a599f71d44533c9ab3f6382f1be02ab966d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90981d59a25d2ff12b4d22130c7a599f71d44533c9ab3f6382f1be02ab966d85->enter($__internal_90981d59a25d2ff12b4d22130c7a599f71d44533c9ab3f6382f1be02ab966d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des zones de déserte ";
        
        $__internal_90981d59a25d2ff12b4d22130c7a599f71d44533c9ab3f6382f1be02ab966d85->leave($__internal_90981d59a25d2ff12b4d22130c7a599f71d44533c9ab3f6382f1be02ab966d85_prof);

        
        $__internal_53a7cdceeb9085c0e0c6ca0ca9ec2aa5d83d2c77e1c3568df416894a4371981e->leave($__internal_53a7cdceeb9085c0e0c6ca0ca9ec2aa5d83d2c77e1c3568df416894a4371981e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_075fc2759afa6f91718efc909b0b6d6029d969bcccd9962f1c0f29c1958c0c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075fc2759afa6f91718efc909b0b6d6029d969bcccd9962f1c0f29c1958c0c56->enter($__internal_075fc2759afa6f91718efc909b0b6d6029d969bcccd9962f1c0f29c1958c0c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d50b00b36554947455fb39c503a04ba5efa0f5ee5ab4ece1011f3c85995e038c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50b00b36554947455fb39c503a04ba5efa0f5ee5ab4ece1011f3c85995e038c->enter($__internal_d50b00b36554947455fb39c503a04ba5efa0f5ee5ab4ece1011f3c85995e038c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 30
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une zone de déserte
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-zone_deserte\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zone_desertes"] ?? $this->getContext($context, "zone_desertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_deserte"]) {
            // line 51
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["zone_deserte"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["zone_deserte"], "zdLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_edit", array("id" => $this->getAttribute($context["zone_deserte"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_delete", array("id" => $this->getAttribute($context["zone_deserte"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_deserte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </tbody>
                        </table>

                        ";
        // line 72
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
        
        $__internal_d50b00b36554947455fb39c503a04ba5efa0f5ee5ab4ece1011f3c85995e038c->leave($__internal_d50b00b36554947455fb39c503a04ba5efa0f5ee5ab4ece1011f3c85995e038c_prof);

        
        $__internal_075fc2759afa6f91718efc909b0b6d6029d969bcccd9962f1c0f29c1958c0c56->leave($__internal_075fc2759afa6f91718efc909b0b6d6029d969bcccd9962f1c0f29c1958c0c56_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d48fc886928f3adb03631f2fb383d66e9e1fb04ba12a5b6bdbb5aa930813b492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48fc886928f3adb03631f2fb383d66e9e1fb04ba12a5b6bdbb5aa930813b492->enter($__internal_d48fc886928f3adb03631f2fb383d66e9e1fb04ba12a5b6bdbb5aa930813b492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1b149642c3d6b606a7b058494a71d21aa22c7e125a1f06881fac470212b4695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b149642c3d6b606a7b058494a71d21aa22c7e125a1f06881fac470212b4695->enter($__internal_c1b149642c3d6b606a7b058494a71d21aa22c7e125a1f06881fac470212b4695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-zone_deserte').DataTable(
            {
                \"aaSorting\": [],
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
                    \"sEmptyTable\": \"Aucune zone de déserte trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_c1b149642c3d6b606a7b058494a71d21aa22c7e125a1f06881fac470212b4695->leave($__internal_c1b149642c3d6b606a7b058494a71d21aa22c7e125a1f06881fac470212b4695_prof);

        
        $__internal_d48fc886928f3adb03631f2fb383d66e9e1fb04ba12a5b6bdbb5aa930813b492->leave($__internal_d48fc886928f3adb03631f2fb383d66e9e1fb04ba12a5b6bdbb5aa930813b492_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtZoneDeserte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 86,  213 => 85,  192 => 72,  187 => 68,  175 => 62,  168 => 58,  162 => 55,  157 => 53,  153 => 51,  149 => 50,  135 => 39,  124 => 31,  121 => 30,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des zones de déserte {% endblock %}

{% set menu_zone_deserte      = true %}
{% set menu_zone_deserte_list = true %}

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
                    <a href=\"{{ path('zone_deserte_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une zone de déserte
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('zone_deserte_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-zone_deserte\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for zone_deserte in zone_desertes %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ zone_deserte.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ zone_deserte.zdLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('zone_deserte_edit', { 'id': zone_deserte.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('zone_deserte_delete', { 'id': zone_deserte.id }) }}\">
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
            \$('#list-zone_deserte').DataTable(
            {
                \"aaSorting\": [],
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
                    \"sEmptyTable\": \"Aucune zone de déserte trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtZoneDeserte/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtZoneDeserte\\index.html.twig");
    }
}
