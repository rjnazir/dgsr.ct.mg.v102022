<?php

/* @Admin/CtRole/index.html.twig */
class __TwigTemplate_515e9f030699ae6087f73b4ce2c69b37e6090818efde0b5976f38a6673031659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtRole/index.html.twig", 1);
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
        $__internal_2de6aea05f8eea3ece76a007908c32be64f0fee12816b870371f683024e26b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de6aea05f8eea3ece76a007908c32be64f0fee12816b870371f683024e26b32->enter($__internal_2de6aea05f8eea3ece76a007908c32be64f0fee12816b870371f683024e26b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/index.html.twig"));

        $__internal_6ae3c3698abba55c20573ab38db6c4c87725ec83b2af3527f01f926d53ef87f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae3c3698abba55c20573ab38db6c4c87725ec83b2af3527f01f926d53ef87f5->enter($__internal_6ae3c3698abba55c20573ab38db6c4c87725ec83b2af3527f01f926d53ef87f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/index.html.twig"));

        // line 5
        $context["menu_role"] = true;
        // line 6
        $context["menu_role_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de6aea05f8eea3ece76a007908c32be64f0fee12816b870371f683024e26b32->leave($__internal_2de6aea05f8eea3ece76a007908c32be64f0fee12816b870371f683024e26b32_prof);

        
        $__internal_6ae3c3698abba55c20573ab38db6c4c87725ec83b2af3527f01f926d53ef87f5->leave($__internal_6ae3c3698abba55c20573ab38db6c4c87725ec83b2af3527f01f926d53ef87f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77c307acf7e7d44728b9c75dc93055ff7673708b3fa317468cc1fd3a352f90ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c307acf7e7d44728b9c75dc93055ff7673708b3fa317468cc1fd3a352f90ba->enter($__internal_77c307acf7e7d44728b9c75dc93055ff7673708b3fa317468cc1fd3a352f90ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ed22540e797d4b8b22499254467cd11e4e91d1808885638cd295dca93a12967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed22540e797d4b8b22499254467cd11e4e91d1808885638cd295dca93a12967->enter($__internal_2ed22540e797d4b8b22499254467cd11e4e91d1808885638cd295dca93a12967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des carosseries ";
        
        $__internal_2ed22540e797d4b8b22499254467cd11e4e91d1808885638cd295dca93a12967->leave($__internal_2ed22540e797d4b8b22499254467cd11e4e91d1808885638cd295dca93a12967_prof);

        
        $__internal_77c307acf7e7d44728b9c75dc93055ff7673708b3fa317468cc1fd3a352f90ba->leave($__internal_77c307acf7e7d44728b9c75dc93055ff7673708b3fa317468cc1fd3a352f90ba_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fa346826242037cb7ff1b604bc39e32909c958db1c9f0cde5af84d4ca7d607d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa346826242037cb7ff1b604bc39e32909c958db1c9f0cde5af84d4ca7d607d->enter($__internal_9fa346826242037cb7ff1b604bc39e32909c958db1c9f0cde5af84d4ca7d607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9047aa3f2a0858bfb8549f3f1cae525371d280460200cc07609372ece2736a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9047aa3f2a0858bfb8549f3f1cae525371d280460200cc07609372ece2736a4a->enter($__internal_9047aa3f2a0858bfb8549f3f1cae525371d280460200cc07609372ece2736a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un rôle
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-role\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th>Nom</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 55
            echo "                                    <tr>

                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "roleName", array()), "html", null, true);
            echo "</td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </tbody>
                        </table>

                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_9047aa3f2a0858bfb8549f3f1cae525371d280460200cc07609372ece2736a4a->leave($__internal_9047aa3f2a0858bfb8549f3f1cae525371d280460200cc07609372ece2736a4a_prof);

        
        $__internal_9fa346826242037cb7ff1b604bc39e32909c958db1c9f0cde5af84d4ca7d607d->leave($__internal_9fa346826242037cb7ff1b604bc39e32909c958db1c9f0cde5af84d4ca7d607d_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02f2e0a30d23f9f6d5b8410fc7428637abd5a215c5fc4e1019068e57d41fd1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f2e0a30d23f9f6d5b8410fc7428637abd5a215c5fc4e1019068e57d41fd1dd->enter($__internal_02f2e0a30d23f9f6d5b8410fc7428637abd5a215c5fc4e1019068e57d41fd1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5c354babb5ee7bf5edc1b408863a943bb7eea0b63fa38eb5580519db9ba13e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c354babb5ee7bf5edc1b408863a943bb7eea0b63fa38eb5580519db9ba13e55->enter($__internal_5c354babb5ee7bf5edc1b408863a943bb7eea0b63fa38eb5580519db9ba13e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-role').DataTable(
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
                    \"sEmptyTable\": \"Aucun rôle trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_5c354babb5ee7bf5edc1b408863a943bb7eea0b63fa38eb5580519db9ba13e55->leave($__internal_5c354babb5ee7bf5edc1b408863a943bb7eea0b63fa38eb5580519db9ba13e55_prof);

        
        $__internal_02f2e0a30d23f9f6d5b8410fc7428637abd5a215c5fc4e1019068e57d41fd1dd->leave($__internal_02f2e0a30d23f9f6d5b8410fc7428637abd5a215c5fc4e1019068e57d41fd1dd_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtRole/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 72,  204 => 71,  186 => 61,  176 => 57,  172 => 55,  168 => 54,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des carosseries {% endblock %}

{% set menu_role      = true %}
{% set menu_role_list = true %}

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
                    <a href=\"{{ path('role_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un rôle
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('role_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-role\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th>Nom</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for role in roles %}
                                    <tr>

                                        <td>{{ role.roleName }}</td>

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
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-role').DataTable(
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
                    \"sEmptyTable\": \"Aucun rôle trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtRole/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtRole\\index.html.twig");
    }
}
