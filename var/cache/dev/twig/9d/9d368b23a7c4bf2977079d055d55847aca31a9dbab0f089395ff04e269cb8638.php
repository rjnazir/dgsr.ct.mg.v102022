<?php

/* @Admin/CtTypeReception/edit.html.twig */
class __TwigTemplate_42ab296132ba8bf2cd54f98fe8cb374316e00e85aef810871c843bb6b5879443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeReception/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5af6445fb9b2d7901b18aa2df7fdbcba3b739454c6a578478b24ac80320a82d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af6445fb9b2d7901b18aa2df7fdbcba3b739454c6a578478b24ac80320a82d2->enter($__internal_5af6445fb9b2d7901b18aa2df7fdbcba3b739454c6a578478b24ac80320a82d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/edit.html.twig"));

        $__internal_522dcbb547988c10fe3f69642d6ed1ddcd6ef1a1212461b85c99e2baa503d941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522dcbb547988c10fe3f69642d6ed1ddcd6ef1a1212461b85c99e2baa503d941->enter($__internal_522dcbb547988c10fe3f69642d6ed1ddcd6ef1a1212461b85c99e2baa503d941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_reception"] = true;
        // line 8
        $context["menu_type_reception"] = true;
        // line 9
        $context["menu_type_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5af6445fb9b2d7901b18aa2df7fdbcba3b739454c6a578478b24ac80320a82d2->leave($__internal_5af6445fb9b2d7901b18aa2df7fdbcba3b739454c6a578478b24ac80320a82d2_prof);

        
        $__internal_522dcbb547988c10fe3f69642d6ed1ddcd6ef1a1212461b85c99e2baa503d941->leave($__internal_522dcbb547988c10fe3f69642d6ed1ddcd6ef1a1212461b85c99e2baa503d941_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b13689ba964dd01268b73fe991b62875d4e57dd0168e7edc0167482960a43219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13689ba964dd01268b73fe991b62875d4e57dd0168e7edc0167482960a43219->enter($__internal_b13689ba964dd01268b73fe991b62875d4e57dd0168e7edc0167482960a43219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73980b0fe53d327db836371f4ccf4ee86a8ff7d257e713a3542586878ccb7b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73980b0fe53d327db836371f4ccf4ee86a8ff7d257e713a3542586878ccb7b55->enter($__internal_73980b0fe53d327db836371f4ccf4ee86a8ff7d257e713a3542586878ccb7b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de réception ";
        
        $__internal_73980b0fe53d327db836371f4ccf4ee86a8ff7d257e713a3542586878ccb7b55->leave($__internal_73980b0fe53d327db836371f4ccf4ee86a8ff7d257e713a3542586878ccb7b55_prof);

        
        $__internal_b13689ba964dd01268b73fe991b62875d4e57dd0168e7edc0167482960a43219->leave($__internal_b13689ba964dd01268b73fe991b62875d4e57dd0168e7edc0167482960a43219_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddc6089bbf1874cf221d7fd11f9c7a23898bcb0c9476f8a9a9baaeea5bc3e627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc6089bbf1874cf221d7fd11f9c7a23898bcb0c9476f8a9a9baaeea5bc3e627->enter($__internal_ddc6089bbf1874cf221d7fd11f9c7a23898bcb0c9476f8a9a9baaeea5bc3e627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_023d8251ca1aaae5c1b6289295377312cc7835ef98672e1715847a41b9e2e97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023d8251ca1aaae5c1b6289295377312cc7835ef98672e1715847a41b9e2e97d->enter($__internal_023d8251ca1aaae5c1b6289295377312cc7835ef98672e1715847a41b9e2e97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tprcpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_023d8251ca1aaae5c1b6289295377312cc7835ef98672e1715847a41b9e2e97d->leave($__internal_023d8251ca1aaae5c1b6289295377312cc7835ef98672e1715847a41b9e2e97d_prof);

        
        $__internal_ddc6089bbf1874cf221d7fd11f9c7a23898bcb0c9476f8a9a9baaeea5bc3e627->leave($__internal_ddc6089bbf1874cf221d7fd11f9c7a23898bcb0c9476f8a9a9baaeea5bc3e627_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeReception/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Type de réception {% endblock %}

{% set menu_reception             = true %}
{% set menu_type_reception        = true %}
{% set menu_type_reception_create = true %}

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
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tprcpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                        <a href=\"{{ path('type_reception_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeReception/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeReception\\edit.html.twig");
    }
}
