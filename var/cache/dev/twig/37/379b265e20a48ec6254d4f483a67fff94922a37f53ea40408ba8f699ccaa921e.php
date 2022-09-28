<?php

/* @Admin/CtProvince/index.html.twig */
class __TwigTemplate_deada3c6cb0eaf7993eee2a01baa2f77eace8b5e6aeb14860522e3111e1237d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProvince/index.html.twig", 1);
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
        $__internal_266509b5ed8cbee25ebd50793b08fbb3ea4fc2b3b3c44e80b9f48eaaea2982aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266509b5ed8cbee25ebd50793b08fbb3ea4fc2b3b3c44e80b9f48eaaea2982aa->enter($__internal_266509b5ed8cbee25ebd50793b08fbb3ea4fc2b3b3c44e80b9f48eaaea2982aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/index.html.twig"));

        $__internal_55298a9e14b617a074ff95ae031c1f473d28e1dfbe69c48b9911b31f75ea5c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55298a9e14b617a074ff95ae031c1f473d28e1dfbe69c48b9911b31f75ea5c6f->enter($__internal_55298a9e14b617a074ff95ae031c1f473d28e1dfbe69c48b9911b31f75ea5c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/index.html.twig"));

        // line 5
        $context["menu_province"] = true;
        // line 6
        $context["menu_province_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_266509b5ed8cbee25ebd50793b08fbb3ea4fc2b3b3c44e80b9f48eaaea2982aa->leave($__internal_266509b5ed8cbee25ebd50793b08fbb3ea4fc2b3b3c44e80b9f48eaaea2982aa_prof);

        
        $__internal_55298a9e14b617a074ff95ae031c1f473d28e1dfbe69c48b9911b31f75ea5c6f->leave($__internal_55298a9e14b617a074ff95ae031c1f473d28e1dfbe69c48b9911b31f75ea5c6f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_440136147e517b37aaa539ef47bb8229fd6639b33c0d56002fab598cdcab683d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440136147e517b37aaa539ef47bb8229fd6639b33c0d56002fab598cdcab683d->enter($__internal_440136147e517b37aaa539ef47bb8229fd6639b33c0d56002fab598cdcab683d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbd7ecc276c6825d373f690e9a34bc5207a198c66e1606735b5faeb2f796cb59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd7ecc276c6825d373f690e9a34bc5207a198c66e1606735b5faeb2f796cb59->enter($__internal_fbd7ecc276c6825d373f690e9a34bc5207a198c66e1606735b5faeb2f796cb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des provinces ";
        
        $__internal_fbd7ecc276c6825d373f690e9a34bc5207a198c66e1606735b5faeb2f796cb59->leave($__internal_fbd7ecc276c6825d373f690e9a34bc5207a198c66e1606735b5faeb2f796cb59_prof);

        
        $__internal_440136147e517b37aaa539ef47bb8229fd6639b33c0d56002fab598cdcab683d->leave($__internal_440136147e517b37aaa539ef47bb8229fd6639b33c0d56002fab598cdcab683d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_51db991a21fdf4f79ec6cf7f8e8509e73ab8d6e37c1643f87e60793d54e94109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51db991a21fdf4f79ec6cf7f8e8509e73ab8d6e37c1643f87e60793d54e94109->enter($__internal_51db991a21fdf4f79ec6cf7f8e8509e73ab8d6e37c1643f87e60793d54e94109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc830f00682310a3d12648ae2a58c2de410ed745ace8be6eb1fe82f321414a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc830f00682310a3d12648ae2a58c2de410ed745ace8be6eb1fe82f321414a93->enter($__internal_bc830f00682310a3d12648ae2a58c2de410ed745ace8be6eb1fe82f321414a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un province
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-province\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvCode", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_edit", array("id" => $this->getAttribute($context["province"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_delete", array("id" => $this->getAttribute($context["province"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </tbody>
                        </table>

                        ";
        // line 80
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
        
        $__internal_bc830f00682310a3d12648ae2a58c2de410ed745ace8be6eb1fe82f321414a93->leave($__internal_bc830f00682310a3d12648ae2a58c2de410ed745ace8be6eb1fe82f321414a93_prof);

        
        $__internal_51db991a21fdf4f79ec6cf7f8e8509e73ab8d6e37c1643f87e60793d54e94109->leave($__internal_51db991a21fdf4f79ec6cf7f8e8509e73ab8d6e37c1643f87e60793d54e94109_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad3618aa44960adcba248c7d2a11bf3005269de03ce6a911a20c4e01b6dcf181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3618aa44960adcba248c7d2a11bf3005269de03ce6a911a20c4e01b6dcf181->enter($__internal_ad3618aa44960adcba248c7d2a11bf3005269de03ce6a911a20c4e01b6dcf181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c05659f1ecb0181cd37694512372b73bd54fc6cf737abb943a532df9a8cd6f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05659f1ecb0181cd37694512372b73bd54fc6cf737abb943a532df9a8cd6f19->enter($__internal_c05659f1ecb0181cd37694512372b73bd54fc6cf737abb943a532df9a8cd6f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-province').DataTable(
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
                    \"sEmptyTable\": \"Aucune province trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_c05659f1ecb0181cd37694512372b73bd54fc6cf737abb943a532df9a8cd6f19->leave($__internal_c05659f1ecb0181cd37694512372b73bd54fc6cf737abb943a532df9a8cd6f19_prof);

        
        $__internal_ad3618aa44960adcba248c7d2a11bf3005269de03ce6a911a20c4e01b6dcf181->leave($__internal_ad3618aa44960adcba248c7d2a11bf3005269de03ce6a911a20c4e01b6dcf181_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProvince/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 94,  239 => 93,  218 => 80,  213 => 76,  201 => 70,  194 => 66,  188 => 63,  184 => 62,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des provinces {% endblock %}

{% set menu_province      = true %}
{% set menu_province_list = true %}

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
                    <a href=\"{{ path('province_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un province
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('province_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-province\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for province in provinces %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ province.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ province.prvNom }}</td>
                                        <td>{{ province.prvCode }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('province_edit', { 'id': province.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('province_delete', { 'id': province.id }) }}\">
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
            \$('#list-province').DataTable(
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
                    \"sEmptyTable\": \"Aucune province trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtProvince/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProvince\\index.html.twig");
    }
}
