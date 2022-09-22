<?php

/* @Admin/CtConstatationAvDedouanement/index.html.twig */
class __TwigTemplate_78fe6934716ffda40231f3b1a057ee503a99b97e733fc1a1cfcec7e711dab763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtConstatationAvDedouanement/index.html.twig", 1);
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
        $__internal_0441f6dba2ff779c9e2070ffa904f4b936c65149111ad74df1040ce1caf0bac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0441f6dba2ff779c9e2070ffa904f4b936c65149111ad74df1040ce1caf0bac4->enter($__internal_0441f6dba2ff779c9e2070ffa904f4b936c65149111ad74df1040ce1caf0bac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanement/index.html.twig"));

        $__internal_9fda13f11efc1d5628a7efe51551eba81e7b2ac0e42336de7a6b0235eff08072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fda13f11efc1d5628a7efe51551eba81e7b2ac0e42336de7a6b0235eff08072->enter($__internal_9fda13f11efc1d5628a7efe51551eba81e7b2ac0e42336de7a6b0235eff08072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanement/index.html.twig"));

        // line 5
        $context["menu_const_av_ded"] = true;
        // line 6
        $context["menu_const_av_ded_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0441f6dba2ff779c9e2070ffa904f4b936c65149111ad74df1040ce1caf0bac4->leave($__internal_0441f6dba2ff779c9e2070ffa904f4b936c65149111ad74df1040ce1caf0bac4_prof);

        
        $__internal_9fda13f11efc1d5628a7efe51551eba81e7b2ac0e42336de7a6b0235eff08072->leave($__internal_9fda13f11efc1d5628a7efe51551eba81e7b2ac0e42336de7a6b0235eff08072_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6bbd8ec52ef6c33a1382e5078352298813d3279d0aa73e748a7b33f8b6fe7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bbd8ec52ef6c33a1382e5078352298813d3279d0aa73e748a7b33f8b6fe7e7->enter($__internal_c6bbd8ec52ef6c33a1382e5078352298813d3279d0aa73e748a7b33f8b6fe7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_287de44089a9905d025047d684a5a2f91b7c7b41fc79319fca14059f20ba6a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287de44089a9905d025047d684a5a2f91b7c7b41fc79319fca14059f20ba6a9a->enter($__internal_287de44089a9905d025047d684a5a2f91b7c7b41fc79319fca14059f20ba6a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des constatations ";
        
        $__internal_287de44089a9905d025047d684a5a2f91b7c7b41fc79319fca14059f20ba6a9a->leave($__internal_287de44089a9905d025047d684a5a2f91b7c7b41fc79319fca14059f20ba6a9a_prof);

        
        $__internal_c6bbd8ec52ef6c33a1382e5078352298813d3279d0aa73e748a7b33f8b6fe7e7->leave($__internal_c6bbd8ec52ef6c33a1382e5078352298813d3279d0aa73e748a7b33f8b6fe7e7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_448e634b5a226614a73ee1c76b565778696656d51fa453ea03ec09b3929a441c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448e634b5a226614a73ee1c76b565778696656d51fa453ea03ec09b3929a441c->enter($__internal_448e634b5a226614a73ee1c76b565778696656d51fa453ea03ec09b3929a441c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3363ecf85ee83b72f329789df5c0813ed2042a75b85b04139aa09db87d975411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3363ecf85ee83b72f329789df5c0813ed2042a75b85b04139aa09db87d975411->enter($__internal_3363ecf85ee83b72f329789df5c0813ed2042a75b85b04139aa09db87d975411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo " <br/>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th width=\"5%\"></th>
                                <th width=\"25%\">N° PV</th>
                                <th width=\"15%\">Provenance</th>
                                <th width=\"40%\">Proprietaire</th>
                                <th width=\"10%\">N° imm.</th>
                                <th width=\"15%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["constatations"] ?? $this->getContext($context, "constatations")));
        foreach ($context['_seq'] as $context["_key"] => $context["constatation"]) {
            // line 60
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "cadNumero", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "cadProvenance", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "cadProprietaireNom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "cadImmatriculation", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_edit", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_delete", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                        <a class=\"btn btn-warning\" title=\"Voir\"
                                           href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_view", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constatation'], $context['_parent'], $context['loop']);
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
        
        $__internal_3363ecf85ee83b72f329789df5c0813ed2042a75b85b04139aa09db87d975411->leave($__internal_3363ecf85ee83b72f329789df5c0813ed2042a75b85b04139aa09db87d975411_prof);

        
        $__internal_448e634b5a226614a73ee1c76b565778696656d51fa453ea03ec09b3929a441c->leave($__internal_448e634b5a226614a73ee1c76b565778696656d51fa453ea03ec09b3929a441c_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6286652b3d98cf95312722e8391b101fc8afb581527975f96e4458842a231dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6286652b3d98cf95312722e8391b101fc8afb581527975f96e4458842a231dcc->enter($__internal_6286652b3d98cf95312722e8391b101fc8afb581527975f96e4458842a231dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7c1c4a91a4c3f2004a354cede7cd2850b34fc0087b71b3aa5a923657ed1faca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1c4a91a4c3f2004a354cede7cd2850b34fc0087b71b3aa5a923657ed1faca9->enter($__internal_7c1c4a91a4c3f2004a354cede7cd2850b34fc0087b71b3aa5a923657ed1faca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-const-av-ded').DataTable(
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
                        \"sEmptyTable\": \"Aucun type de constatation avant dédouanement trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
";
        
        $__internal_7c1c4a91a4c3f2004a354cede7cd2850b34fc0087b71b3aa5a923657ed1faca9->leave($__internal_7c1c4a91a4c3f2004a354cede7cd2850b34fc0087b71b3aa5a923657ed1faca9_prof);

        
        $__internal_6286652b3d98cf95312722e8391b101fc8afb581527975f96e4458842a231dcc->leave($__internal_6286652b3d98cf95312722e8391b101fc8afb581527975f96e4458842a231dcc_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtConstatationAvDedouanement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 102,  256 => 101,  235 => 88,  230 => 84,  218 => 78,  211 => 74,  204 => 70,  198 => 67,  194 => 66,  190 => 65,  186 => 64,  181 => 62,  177 => 60,  173 => 59,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des constatations {% endblock %}

{% set menu_const_av_ded      = true %}
{% set menu_const_av_ded_list = true %}

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
            {{ messages }} <br/>
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
                    <a href=\"{{ path('const_av_ded_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('const_av_ded_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th width=\"5%\"></th>
                                <th width=\"25%\">N° PV</th>
                                <th width=\"15%\">Provenance</th>
                                <th width=\"40%\">Proprietaire</th>
                                <th width=\"10%\">N° imm.</th>
                                <th width=\"15%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for constatation in constatations %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ constatation.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ constatation.cadNumero }}</td>
                                    <td>{{ constatation.cadProvenance }}</td>
                                    <td>{{ constatation.cadProprietaireNom }}</td>
                                    <td>{{ constatation.cadImmatriculation }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('const_av_ded_edit', { 'id': constatation.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('const_av_ded_delete', { 'id': constatation.id }) }}\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                        <a class=\"btn btn-warning\" title=\"Voir\"
                                           href=\"{{ path('const_av_ded_view', { 'id': constatation.id }) }}\">
                                            <i class=\"fa fa-eye\"></i>
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
            \$('#list-const-av-ded').DataTable(
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
                        \"sEmptyTable\": \"Aucun type de constatation avant dédouanement trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
{% endblock %}
", "@Admin/CtConstatationAvDedouanement/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtConstatationAvDedouanement\\index.html.twig");
    }
}
